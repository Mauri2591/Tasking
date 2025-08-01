<?php
require_once __DIR__ . "/../Config/Conexion.php";
require_once __DIR__ . "/../Config/Config.php";
require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../Model/Clases/HtmlPurifier.php";
require_once __DIR__ . "/../Model/Proyectos.php";
require_once __DIR__ . "/../Model/Clases/Validaciones.php";
require_once __DIR__ . "/../Model/Clases/Headers.php";
require_once __DIR__ . "/../Model/Clases/Openssl.php";

$proyecto = new Proyectos();
$validacion = new Validaciones();
Headers::get_csp();

switch ($_GET['proy']) {
    case 'get_paises':
        $htmlOption = '';
        $datos = $proyecto->get_paises();
        foreach ($datos as $key => $val) {
            $htmlOption .= '<option value=' . $val['pais_id'] . '>' . $val['pais_nombre'] . '</option>';
        }
        echo $htmlOption;
        break;

    case 'insert_proyecto':
        if (empty($_POST['client_id']) || empty($_POST['cantidad_servicios'])) {
            echo json_encode(["Status" => "Error", "Messaje" => "Campos obligatorios vacíos"]);
        } else {
            $cantidad_servicios =  $_POST['cantidad_servicios'];
            $iniciador = 1;
            // Insertás el proyecto y obtenés el ID
            $proy_id = $proyecto->insert_proyecto(
                $_SESSION['usu_id'],
                $_POST['client_id'],
                $_POST['cantidad_servicios'],
            );

            while ($iniciador <= $cantidad_servicios) {
                $proyecto->proyecto_cantidad_servicios($proy_id, $_SESSION['usu_id'], $iniciador);
                $iniciador++;
            }
            echo json_encode(["Status" => "Success"]);
        }
        break;

    case 'insert_nuevos_host':
        $proyecto->insert_nuevos_host($_POST['id_proyecto_cantidad_servicios'], $_SESSION['usu_id'], $_POST['tipo'], $_POST['host']);
        break;

    case 'get_hosts_proy_ip':
        $data = $proyecto->get_hosts_proy($_POST['id_proyecto_cantidad_servicios']);
        $ip = [];
        $sectionIps = '';
        foreach ($data as $key => $val) {
            if ($val['tipo'] == "IP") {
                $ip[] = $val['host'];
            }
        }
        foreach ($ip as $key => $val) {
            $sectionIps .= '<section><span class="badge bg-light text-dark">' . $val . '</span></section>';
        }
        echo $sectionIps;
        break;

    case 'get_hosts_proy_url':
        $data = $proyecto->get_hosts_proy($_POST['id_proyecto_cantidad_servicios']);
        $url = [];
        $sectionUrl = '';
        foreach ($data as $key => $val) {
            if ($val['tipo'] == "URL") {
                $url[] = $val['host'];
            }
        }
        foreach ($url as $key => $val) {
            $sectionUrl .= '<section><span class="badge bg-light text-dark">' . $val . '</span></section>';
        }
        echo $sectionUrl;
        break;

    case 'get_hosts_proy_otro':
        $data = $proyecto->get_hosts_proy($_POST['id_proyecto_cantidad_servicios']);
        $otro = [];
        $sectionOtro = '';
        foreach ($data as $key => $val) {
            if ($val['tipo'] == "OTRO") {
                $otro[] = $val['host'];
            }
        }
        foreach ($otro as $key => $val) {
            $sectionOtro .= '<section><span class="badge bg-light text-dark">' . $val . '</span></section>';
        }
        echo $sectionOtro;
        break;


    case 'get_usuarios_x_sector':
        $usuarios = $proyecto->get_usuarios_x_sector($_POST['sector_id']);
        $asignados = [];

        if (!empty($_POST['id_proyecto_cantidad_servicios'])) {
            $asignados = $proyecto->get_usuarios_x_proy_y_sector((int) $_POST['id_proyecto_cantidad_servicios']);
        }

        $asignados_ids = array_column($asignados, 'usu_asignado');

        $htmlCheckbox = '';
        foreach ($usuarios as $val) {
            $checked = in_array($val['usu_id'], $asignados_ids) ? 'checked' : '';
            $htmlCheckbox .= '<label title="' . $val['sector_nombre'] . '" class="d-block">'
                . '<input type="checkbox" value="' . $val['usu_id'] . '" name="usu_asignado[]" ' . $checked . '> '
                . htmlspecialchars($val['usu_nom'])
                . '</label>';
        }

        echo $htmlCheckbox;
        break;

    case 'insert_proyecto_gestionado':
        $archivo_subido = (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === 0)
            ? Validaciones::subida_archivo($_FILES['archivo'])
            : null;

        $id_proyecto_cantidad_servicios = $_POST['id_proyecto_cantidad_servicios']; // ✅ ACÁ asignás el valor

        $cantidad_recurrencias = $_POST['recurrencia']; //Aca traigo la cantidad de recurrencias

        $longitud_usu_asignado = isset($_POST['usu_asignado']) ? count($_POST['usu_asignado']) : null;

        //Procesás activos usando la clase Validaciones
        $ips   = $_POST['ips'] ?? '';
        $urls  = $_POST['urls'] ?? '';
        $otros = $_POST['otros'] ?? '';

        $hosts = array_merge(
            $validacion->parse_hosts($ips, 'IP'),
            $validacion->parse_hosts($urls, 'URL'),
            $validacion->parse_hosts($otros, 'OTRO')
        );

        //Insertás los activos con el proy_id
        foreach ($hosts as $host) {
            $proyecto->insert_host($id_proyecto_cantidad_servicios, $_SESSION['usu_id'], $host['tipo'], $host['valor']);
        }

        $id_proyecto_gestionado = $proyecto->insert_proyecto_gestionado(
            $_POST['id_proyecto_cantidad_servicios'],
            $_POST['cat_id'],
            $_POST['cats_id'],
            $_POST['sector_id'],
            $_SESSION['usu_id'],
            $_POST['prioridad_id'],
            14,
            $_POST['titulo'],
            $_POST['descripcion'],
            $_POST['refProy'],
            $_POST['recurrencia'],
            $_POST['fech_inicio'],
            $_POST['fech_fin'],
            $_POST['fech_vantive'],
            $archivo_subido,
            $_POST['captura_imagen']
        );

        for ($i = 1; $i <= $cantidad_recurrencias; $i++) {
            $proyecto->insert_proyecto_recurrencia($id_proyecto_gestionado);
        }

        //Inserto el pm
        $proyecto->insert_proyecto_pm($id_proyecto_gestionado, $_SESSION['usu_id'], 1);

        $proyecto->insert_dimensionamiento(
            $id_proyecto_gestionado,
            $_POST['hs_dimensionadas'],
            $_SESSION['usu_id']
        );

        if (isset($_POST['usu_asignado'])) {
            if (empty($_POST['usu_asignado'])) {
                $proyecto->insert_usuarios_proyecto($id_proyecto_gestionado, null);
            }
        } else {
            $proyecto->insert_usuarios_proyecto($id_proyecto_gestionado, null);
        }

        for ($i = 0; $i < $longitud_usu_asignado; $i++) {
            $proyecto->insert_usuarios_proyecto($id_proyecto_gestionado, $_POST['usu_asignado'][$i]);
        }

        echo json_encode(["Status" => "OK", "Message" => "Proyecto insertado correctamente"]);
        http_response_code(200);
        break;

    case 'get_sector_x_proy':
        echo json_encode($proyecto->get_sector_x_proy($_POST['id']));
        break;

    case 'get_usuarios_x_sector_agregar_a_proy':
        $data = $proyecto->get_usuarios_x_sector($_POST['sector_id']);
        $htmlOption = '';
        foreach ($data as $key => $val) {
            $htmlOption .= '<option value="' . $val['usu_id'] . '">' . $val['usu_correo'] . '</option>';
        }
        echo $htmlOption;
        break;

    case 'insert_usuarios_proyecto_abierto':
        $proyecto->insert_usuarios_proyecto($_POST['id_proyecto_gestionado'], $_POST['usu_asignado']);
        break;

    case 'delete_proyecto_a_nuevo':
        $proyecto->delete_proyecto_a_nuevo($_POST['proy_id']);
        break;

    case 'delete_proyecto_a_nuevo_proyectos_contador_recurrencia':
        $proyecto->delete_proyecto_a_nuevo_proyectos_contador_recurrencia($_POST['proy_id']);
        break;

    case 'finalizar_proyecto_sin_implementar_proyecto_gestionado':
        $proyecto->finalizar_proyecto_sin_implementar_proyecto_gestionado($_POST['id_proyecto_cantidad_servicios'], $_POST['estados_id']);
        break;

    case 'finalizar_proyecto_sin_implementar_proyecto_cantidad_servicios':
        $proyecto->finalizar_proyecto_sin_implementar_proyecto_cantidad_servicios($_POST['id']);
        break;


    case 'get_proyectos_nuevos_borrador':
        $datos = $proyecto->get_proyectos_nuevos_borrador();
        $data = array();
        $colores = array("ETHICAL HACKING" => "bg-warning text-dark", "SOC" => "bg-dark text-light", "SASE" => "bg-info text-light", "CALIDAD Y PROCESOS" => "bg-light text-dark", "INCIDENT RESPONSE" => "bg-danger text-light");
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = '<span class="badge bg-light text-dark">' . $row['fech_crea'] . '</span>';
            $sub_array[] = strlen($row['client_rs']) > 70
                ? '<span class="badge bg-light text-dark">' . substr($row['client_rs'], 0, 67) . '...' . '</span>'
                : '<span class="badge bg-light text-dark">' . $row['client_rs'] . '</span>';
            $sub_array[] = '<span class="badge bg-light text-dark">' . $row['pais_nombre'] . '</span';
            $sub_array[] = '<span class="badge bg-light text-dark">' . $row['creador_proy'] . '</span';
            $color_clase = isset($colores[$row['sector_nombre']]) ? $colores[$row['sector_nombre']] : 'bg-light text-dark';
            $sub_array[] = empty($row['sector_nombre'])
                ? '<span>Sin asignar</span>'
                : '<span class="badge ' . $color_clase . '">' . $row['sector_nombre'] . '</span>';
            $sub_array[] = isset($row['usu_nom_asignado']) == '' ? '<span>Sin asignar</span>' : '<span class="badge bg-info text-light">' . $row['usu_nom_asignado'] . '</span>';
            $sub_array[] = isset($row['cat_nom']) == '' ? '<span>Sin asignar</span>' : '<span class="badge bg-light text-dark">' . $row['cat_nom'] . '</span>';
            $sub_array[] = '<span type="button" onclick="gestionar_proy_borrador(' . $row['proy_id'] . ',' . $row['id_proyecto_cantidad_servicios'] . ',' . $row['id_proyecto_gestionado'] . ')" data-placement="top" title="Gestionar Borrador"><i class="ri-send-plane-fill text-primary fs-16"></i></span>';
            $data[] = $sub_array;
        }
        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($results);
        break;


    case 'get_proyectos_nuevos_x_sector':
        $datos = $proyecto->get_proyectos_nuevos_x_sector($_POST['sector_id']);
        $data = array();
        $colores = array("ETHICAL HACKING" => "bg-warning text-dark", "SOC" => "bg-dark text-light", "SASE" => "bg-info text-light", "CALIDAD Y PROCESOS" => "bg-light text-dark", "INCIDENT RESPONSE" => "bg-danger text-light");
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = strlen($row['client_rs']) > 70
                ? '<span class="badge bg-light text-dark">' . substr($row['client_rs'], 0, 67) . '...' . '</span>'
                : '<span class="badge bg-light text-dark">' . $row['client_rs'] . '</span>';
            $sub_array[] = '<span class="badge bg-light text-dark">' . $row['fech_inicio'] . '</span>';
            $sub_array[] = '<span class="badge bg-light text-dark">' . $row['fech_fin'] . '</span>';
            $sub_array[] = isset($row['cat_nom']) == '' ? '<span>Sin asignar</span>' : '<span class="badge bg-light text-dark">' . $row['cat_nom'] . '</span>';
            $sub_array[] = '<span class="badge bg-light text-dark">' . $row['creador_proy'] . '</span';
            $color_clase = isset($colores[$row['sector_nombre']]) ? $colores[$row['sector_nombre']] : 'bg-light text-dark';
            $sub_array[] = empty($row['sector_nombre'])
                ? '<span>Sin asignar</span>'
                : '<span class="badge border border-primary ' . $color_clase . '">' . $row['sector_nombre'] . '</span>';
            $sub_array[] = isset($row['usu_nom_asignado']) == '' ? '<span>Sin asignar</span>' : '<span class="badge border border-primary bg-light text-dark">' . $row['usu_nom_asignado'] . '</span>';
            $sub_array[] = '<span type="button" onclick="gestionar_proy_borrador(' . $row['proy_id'] . ',' . $row['id_proyecto_cantidad_servicios'] . ',' . $row['id'] . ')" data-placement="top" title="Gestionar Borrador"><i class="ri-send-plane-fill text-primary fs-16"></i></span>';
            $data[] = $sub_array;
        }
        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($results);
        break;

    case 'get_datos_proyecto_creado':
        echo json_encode($proyecto->get_datos_proyecto_creado($_POST['id_proyecto_cantidad_servicios']));
        break;

    case 'get_client_y_pais_para_proy_borrador':
        echo json_encode($proyecto->get_client_y_pais_para_proy_borrador($_POST['proy_id']));
        break;

    case 'get_proyecto_gestionado_para_cambiar_a_abier':
        echo json_encode($proyecto->get_proyecto_gestionado_para_cambiar_a_abier($_POST['proy_id'], $_POST['id_proyecto_cantidad_servicios']));
        break;

    case 'eliminar_proy_x_id':
        $proyecto->eliminar_proy_x_id($_POST['proy_id'], $_POST['numero_servicio']);
        break;

    case 'eliminar_proy_x_numero_servicio_proy_gestionado':
        $proyecto->eliminar_proy_x_numero_servicio_proy_gestionado($_POST['id']);
        break;

    case 'cambiar_a_abierto':
        $proyecto->cambiar_a_abierto($_POST['id_proyecto_cantidad_servicios']);
        break;

    case 'inactivar_host_x_id':
        $proyecto->inactivar_host_x_id($_SESSION['usu_id'], $_POST['id_proyecto_cantidad_servicios'], $_POST['host_id']);
        break;

    case 'inactivar_todos_los_host_x_id_proyecto_cantidad_servicios':
        $proyecto->inactivar_todos_los_host_x_id_proyecto_cantidad_servicios($_SESSION['usu_id'], $_POST['id_proyecto_cantidad_servicios']);
        break;

    case 'activar_host_x_id':
        $proyecto->activar_host_x_id($_SESSION['usu_id'], $_POST['id_proyecto_cantidad_servicios'], $_POST['host_id']);
        break;

    case 'update_proyecto':
        // 1. Actualiza los datos del proyecto
        $updated_proyecto = $proyecto->update_proyecto(
            (int) $_POST['id_proyecto_cantidad_servicios'],
            (int) $_POST['cat_id'],
            (int) $_POST['cats_id'],
            (int) $_POST['sector_id'],
            (int) $_POST['usu_id'],
            (int) $_SESSION['usu_id'],
            (int) $_POST['prioridad_id'],
            $_POST['titulo'],
            $_POST['descripcion'],
            $_POST['refProy'],
            $_POST['recurrencia'],
            $_POST['fech_inicio'],
            $_POST['fech_fin'],
            $_POST['fech_vantive']
        );

        // 2. Valida que vengan los datos requeridos para hs y gestión
        if (!isset($_POST['id_proyecto_gestionado']) || !isset($_POST['hs_dimensionadas'])) {
            echo json_encode(["status" => "error", "message" => "Faltan datos de horas dimensionadas o ID de proyecto"]);
            exit;
        }

        // 3. Actualiza las horas dimensionadas
        error_log("Ejecutando update_hs_dimensionadas con ID: " . $_POST['id_proyecto_gestionado']);
        error_log("Valor hs_dimensionadas: " . $_POST['hs_dimensionadas']);
        $updated_horas = $proyecto->update_hs_dimensionadas(
            (int) $_POST['id_proyecto_gestionado'],
            $_POST['hs_dimensionadas'],
            (int) $_SESSION['usu_id']
        );

        // 4. Actualiza usuarios asignados
        $usuarios_ids = isset($_POST['usu_asignado']) ? $_POST['usu_asignado'] : [];
        $updated_usuarios = $proyecto->update_usuarios_asignados(
            (int) $_POST['id_proyecto_gestionado'],
            $usuarios_ids
        );

        // 5. Verifica todos los resultados
        if ($updated_proyecto !== false && $updated_horas !== false && $updated_usuarios !== false) {
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Hubo un problema actualizando el proyecto, horas o usuarios"]);
        }

        // 6. Si hay recurrencia, inserta clones
        if (isset($_POST['recurrencia']) && $_POST['recurrencia'] != "0") {
            for ($i = 1; $i <= (int) $_POST['recurrencia']; $i++) {
                $proyecto->insert_proyecto_recurrencia((int) $_POST['id_proyecto_gestionado']);
            }
        }

        break;


    case 'get_host_proy_borrador':
        $datos = $proyecto->get_host_proy_borrador($_POST['id_proyecto_cantidad_servicios']);
        $data = array();
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = '<p class="text-center py-0">' . $row['tipo'] . '</p>';
            $sub_array[] = '<p class="text-center py-0">' . $row['host'] . '</p>';
            $sub_array[] = $row['est'] == 0 ? '<p class="text-center"><span style="background-color:gray;" class="badge">Inactivo</span></p>' : '<p class="text-center"><span class="badge bg-info">Activo</span></p>';
            $sub_array[] = $row['est'] == 1 ? '<p class="text-center py-0 my-0" style="align-items:center style="margin:0; padding:0>' . '<span type=button onclick=inactivar_host_borrador(' . $row['id_proyecto_cantidad_servicios'] . ',' . $row['host_id'] . ') data-placement="top" title="Inactivar Host"><i class=" text-danger ri-delete-bin-fill fs-18"></i></span>' . '</p>' : '<p style="margin:0; padding:0;" class="text-center py-0 my-0" align-items:center">' . '<span type=button onclick=activar_host_borrador(' . $row['id_proyecto_cantidad_servicios'] . ',' . $row['host_id'] . ') data-placement="top" title="Activar Host"><i class="text-info ri-add-circle-fill fs-18"></i></span>' . '</p>';
            $data[] = $sub_array;
        }
        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($results);
        break;

    case 'get_sectores':
        $data = $proyecto->get_sectores();
        $htmlOption = '';
        foreach ($data as $key => $val) {
            $htmlOption .= '<option value=' . $val['sector_id'] . '>' . $val['sector_nombre'] . '</option>';
        }
        echo $htmlOption;
        break;

    case 'get_combo_categorias_x_sector':
        $sector_id = $_POST['sector_id'];
        $data = $proyecto->get_combo_categorias_x_sector($sector_id);

        foreach ($data as $row) {
            echo '<option value="' . $row['cat_id'] . '">' . $row['cat_nom'] . '</option>';
        }
        break;

    case 'get_combo_subcategorias_x_sector':
        // $htmlOption = '';
        $datos = $proyecto->get_combo_subcategorias_x_sector($_POST['sector_id']);
        foreach ($datos as $key => $val) {
            $htmlOption .= '<option value=' . $val['cats_id'] . '>' . $val['cats_nom'] . '</option>';
        }
        echo $htmlOption;
        break;

    case 'get_combo_prioridad_proy_nuevo_eh':
        $htmlOption = '';
        $datos = $proyecto->get_combo_prioridad_proy_nuevo_eh();
        foreach ($datos as $key => $val) {
            $htmlOption .= '<option value=' . $val['id'] . '>' . $val['prioridad'] . '</option>';
        }
        echo $htmlOption;
        break;

    case 'get_datos_proyecto_x_proy_id':
        echo json_encode($proyecto->get_datos_proyecto_x_proy_id($_POST['proy_id'], $_POST['id']));
        break;

    case 'get_primer_recurrencia':
        echo json_encode($proyecto->get_primer_recurrencia($_POST['proy_id']));
        break;

    case 'get_data_proyecto_cantidad_servicios':
        echo json_encode($proyecto->get_data_proyecto_cantidad_servicios($_POST['id']));
        break;

    case 'get_usuarios_x_proy_y_sector':
        $data = $proyecto->get_usuarios_x_proy_y_sector($_POST['id_proyecto_cantidad_servicios']);
        foreach ($data as $key => $val) {
            if (!empty($val['usu_nom'])) {
?>
<li class="mb-1 text-dark fs-12"><?php echo $val['usu_nom'] . '-' . $val['sector_nombre'] ?>
</li>
<?php
            }
        }
        break;

    case 'validar_boton_usuario_asignado_y_calidad':
        echo json_encode($proyecto->get_usuarios_x_proy_y_sector($_POST['id_proyecto_cantidad_servicios']));
        break;

    case 'validar_boton_mostrar_agregar_usuario_proy':
        $datos = $proyecto->get_usuarios_x_proy_y_sector($_POST['id_proyecto_cantidad_servicios']);
        $usu_asignado = [];
        foreach ($datos as $val) {
            $usu_asignado[] = $val['usu_asignado'];
        }

        if (
            isset($_SESSION['sector_id'], $_SESSION['usu_id']) &&
            (
                $_SESSION['sector_id'] == "4" ||
                in_array($_SESSION['usu_id'], $usu_asignado)
            )
        ) {
            echo json_encode("ok");
        } else {
            echo json_encode("error");
        }

        break;


    case 'get_proyectos_eh':
        $datos = $proyecto->get_proyectos_eh($_POST['sector_id'], $_POST['cat_id'], $_POST['estados_id']);
        $data = array();
        $colores = array("ETHICAL HACKING" => "bg-warning text-dark", "SOC" => "bg-dark text-light", "SASE" => "bg-info text-light", "CALIDAD Y PROCESOS" => "bg-light text-dark", "INCIDENT RESPONSE" => "bg-danger text-light");
        foreach ($datos as $row) {
            $sub_array = array();
            $session_usu_id = $_SESSION['usu_id'];
            $session_sector_id = $_SESSION['sector_id'];
            $ids_asignados = explode(',', $row['usu_id_asignado'] ?? '');
            $puede_cambiar_estado = in_array($session_usu_id, $ids_asignados) || $session_sector_id == "4";
            switch ($row['prioridad']) {
                case '1':
                    $sub_array[] = '<span class="badge bg-light border border-success text-dark" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' .
                        (strlen($row['titulo']) > 50 ? substr($row['titulo'], 0, 47) . '...' : $row['titulo']) .
                        '</span>';
                    break;
                case '2':
                    $sub_array[] = '<span class="badge bg-light border border-warning text-dark" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' .
                        (strlen($row['titulo']) > 50 ? substr($row['titulo'], 0, 47) . '...' : $row['titulo']) .
                        '</span>';
                    break;
                case '3':
                    $sub_array[] = '<span class="badge bg-light border border-danger text-dark" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' .
                        (strlen($row['titulo']) > 50 ? substr($row['titulo'], 0, 47) . '...' : $row['titulo']) .
                        '</span>';
                    break;
            }
            $sub_array[] = $row['fech_inicio'] == '' ? 'Sin fecha' : '<span class="badge bg-light text-dark">' . $row['fech_inicio'] . '</span>';
            $sub_array[] = $row['fech_fin'] == '' ? 'Sin fecha' : '<span class="badge bg-light text-dark">' . $row['fech_fin'] . '</span>';
            $sub_array[] = '<span class="badge bg-light text-dark">' . $row['creador_proy'] . '</span>';
            $sub_array[] = strlen($row['cats_nom']) > 20
                ? '<span class="badge bg-light text-dark">' . substr($row['cats_nom'], 0, 17) . '...</span>'
                : '<span class="badge bg-light text-dark">' . $row['cats_nom'] . '</span>';
            $sub_array[] = $row['hs_dimensionadas'] == "" ? "Sin hs" : '<span class="badge bg-light text-dark">' . $row['hs_dimensionadas'] . '</span>';
            if (!empty($row['usu_nom_asignado'])) {
                $sub_array[] = '<span class="badge bg-info text-light">' . $row['usu_nom_asignado'] . '</span>';
            } else {
                $sub_array[] = '<span type="button" onclick="asignar_proyecto(' . $row['id_proyecto_cantidad_servicios'] . ')" title="Asignarme el proyecto" class="badge bg-light border border-dark text-dark">Sin asignar</span>';
            }
            $sub_array[] = '<span type="button" onclick="ver_hosts_eh(' . $row['id_proyecto_cantidad_servicios'] . ')">
                        <i class="text-secondary fs-18 ri-global-line" title="Ver hosts"></i>
                    </span>';
            if (in_array($row['estados_id'], [2, 3, 4])) {
                $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '" title="Ver proyecto">
                            <i class="ri-send-plane-fill text-primary fs-18"></i>
                        </a>';
            }
            if ($puede_cambiar_estado) {
                switch ($row['estados_id']) {
                    case '1':
                        $sub_array[] = '<div class="btn-group btn-group-sm p-0" role="group">
                    <button class="btn btn-primary btn-sm dropdown-toggle py-0" data-bs-toggle="dropdown" aria-expanded="false">Estado</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" onclick="cambiar_a_abierto(' . $row['id_proyecto_cantidad_servicios'] . ')">Abierto</a></li>
                        <li><a class="dropdown-item" onclick="cambiar_a_borrador(' . $row['id_proyecto_cantidad_servicios'] . ')">Borrador</a></li>
                    </ul>
                </div>';
                        break;
                    case '2':
                        $sub_array[] = '<div class="btn-group btn-group-sm p-0" role="group">
                    <button class="btn btn-primary btn-sm dropdown-toggle py-0" data-bs-toggle="dropdown" aria-expanded="false">Estado</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" onclick="cambiar_a_nuevo(' . $row['id_proyecto_cantidad_servicios'] . ')">Nuevos</a></li>
                        <li><a class="dropdown-item" onclick="cambiar_a_borrador(' . $row['id_proyecto_cantidad_servicios'] . ')">Borrador</a></li>
                    </ul>
                </div>';
                        break;

                    case '3':
                        $sub_array[] = '<div class="btn-group btn-group-sm p-0" role="group">
                    <button class="btn btn-primary btn-sm dropdown-toggle py-0" data-bs-toggle="dropdown" aria-expanded="false">Estado</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" onclick="cambiar_a_abierto(' . $row['id_proyecto_cantidad_servicios'] . ')">Abierto</a></li>
                    </ul>
                </div>';
                        break;
                }
            } else {
                $sub_array[] = '<div class="btn-group btn-group-sm p-0" role="group">
            <button class="btn btn-secondary btn-sm py-0" title="Sin permisos" disabled>Estado</button>
        </div>';
            }
            $data[] = $sub_array;
        }

        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($results);
        break;

    case 'get_proyectos_soc':
        $datos = $proyecto->get_proyectos_soc($_POST['sector_id'], $_POST['cat_id'], $_POST['estados_id']);
        $data = array();
        $colores = array("ETHICAL HACKING" => "bg-warning text-dark", "SOC" => "bg-dark text-light", "SASE" => "bg-info text-light", "CALIDAD Y PROCESOS" => "bg-light text-dark", "INCIDENT RESPONSE" => "bg-danger text-light");
        foreach ($datos as $row) {
            $sub_array = array();
            switch ($row['prioridad']) {
                case '1':
                    $sub_array[] = strlen($row['titulo']) > 50
                        ? '<span class="badge bg-light border border-success text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . substr($row['titulo'], 0, 47) . '...' . '</span>'
                        : '<span class="badge bg-light border border-success text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . $row['titulo'] . '</span>';
                    break;

                case '2':
                    $sub_array[] = strlen($row['titulo']) > 50
                        ? '<span class="badge bg-light border border-warning text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . substr($row['titulo'], 0, 47) . '...' . '</span>'
                        : '<span class="badge bg-light border border-warning text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . $row['titulo'] . '</span>';
                    break;

                case '3':
                    $sub_array[] = strlen($row['titulo']) > 50
                        ? '<span class="badge bg-light border border-danger text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . substr($row['titulo'], 0, 47) . '...' . '</span>'
                        : '<span class="badge bg-light border border-danger text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . $row['titulo'] . '</span>';
                    break;
            }
            $sub_array[] = $row['fech_inicio'] == '' ? 'Sin fecha' : '<span class="badge bg-light text-dark">' . $row['fech_inicio'] . '</span>';
            $sub_array[] = $row['fech_fin'] == '' ? 'Sin fecha' : '<span class="badge bg-light text-dark">' . $row['fech_fin'] . '</span>';
            $sub_array[] = '<span class="badge bg-light text-dark">' . $row['creador_proy'] . '</span';
            $sub_array[] = strlen($row['cats_nom']) > 20
                ? '<span class="badge bg-light text-dark">' . substr($row['cats_nom'], 0, 17) . '...' . '</span>'
                : '<span class="badge bg-light text-dark">' . $row['cats_nom'] . '</span>';
            $sub_array[] = $row['hs_dimensionadas'] == "" ? "Sin hs" : '<span class="badge bg-light text-dark">' . $row['hs_dimensionadas'] . '</span';
            $sub_array[] = isset($row['usu_nom_asignado']) == '' ? '<span type="button" onclick="asignar_proyecto(' . $row['id_proyecto_cantidad_servicios'] . ')" data-placement="top" title="Asignarme el proyecto" class="badge bg-light border border-dark text-dark">Sin asignar</span>' : '<span class="badge bg-info text-light">' . $row['usu_nom_asignado'] . '</span>';

            if (isset($row['usu_nom_asignado']) && $row['usu_nom_asignado'] != '') {
                switch ($row['estados_id']) {
                    case '1':
                        $sub_array[] = '<span type="button" onclick="ver_hosts_eh(' . $row['id_proyecto_cantidad_servicios'] . ' )"><i class="text-secondary fs-18 ri-global-line" data-placement="top" title="Ver hosts"></i></span>';
                        break;
                    case '2':
                        $sub_array[] = '<span type="button" onclick="ver_hosts_eh(' . $row['id_proyecto_cantidad_servicios'] . ' )"><i class="text-secondary fs-18 ri-global-line" data-placement="top" title="Ver hosts"></i></span>';
                        $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '" target="_blank" rel="noopener noreferrer" title="Ver proyecto"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';
                        break;
                }
            }
            if (isset($row['usu_nom_asignado']) && $row['usu_nom_asignado'] != '') {
                switch ($row['estados_id']) {
                    case '1':
                        $sub_array[] = '<div class="btn-group btn-group-sm p-0" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group p-0" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-primary btn-sm dropdown-toggle py-0" data-bs-toggle="dropdown" aria-expanded="false">
                                Estado
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a class="dropdown-item" type="button" onclick="cambiar_a_abierto(' . $row['id_proyecto_cantidad_servicios'] . ')">Abierto</a></li>
                                <li><a class="dropdown-item" type="button" onclick="cambiar_a_borrador(' . $row['id_proyecto_cantidad_servicios'] . ')">Borrador</a></li>
                            </ul>
                        </div>
                    </div>';
                        break;

                    case '2':
                        $sub_array[] = '<div class="btn-group btn-group-sm p-0" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group p-0" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-primary btn-sm dropdown-toggle py-0" data-bs-toggle="dropdown" aria-expanded="false">
                                Estado
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a class="dropdown-item" type="button" onclick="cambiar_a_nuevo(' . $row['id_proyecto_cantidad_servicios'] . ')">Nuevos</a></li>
                                <li><a class="dropdown-item" type="button" onclick="cambiar_a_borrador(' . $row['id_proyecto_cantidad_servicios'] . ')">Borrador</a></li>
                                </ul>
                        </div>
                    </div>';
                        // <li><a class="dropdown-item" type="button" onclick="cambiar_a_realizado(' . $row['id_proyecto_cantidad_servicios'] . ')">Realizados</a></li>
                        break;

                    case '3':
                        $sub_array[] = '<span type="button" onclick="ver_hosts_eh(' . $row['id_proyecto_cantidad_servicios'] . ' )"><i class="text-secondary fs-18 ri-global-line" data-placement="top" title="Ver hosts"></i></span>';
                        $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '" target="_blank" rel="noopener noreferrer" title="Ver proyecto"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';

                        break;
                    case '4':
                        $sub_array[] = '<span type="button" onclick="ver_hosts_eh(' . $row['id_proyecto_cantidad_servicios'] . ' )"><i class="text-secondary fs-18 ri-global-line" data-placement="top" title="Ver hosts"></i></span>';
                        $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '" target="_blank" rel="noopener noreferrer" title="Ver proyecto"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';

                        break;
                    default:
                        break;
                }
            } else {
                $sub_array[] = '<span type="button" onclick="ver_hosts_eh(' . $row['id_proyecto_cantidad_servicios'] . ' )"><i class="text-secondary fs-18 ri-global-line" data-placement="top" title="Ver hosts"></i></span>';
                $sub_array[] = '<span class="badge bg-primary text-light px-2 py-1">Pendiente</span>';
            }
            $data[] = $sub_array;
        }
        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($results);
        break;

    case 'get_proyectos_incident_response':
        $datos = $proyecto->get_proyectos_incident_response($_POST['sector_id'], $_POST['estados_id'], $_POST['cat_id']);
        $data = array();
        $colores = array("ETHICAL HACKING" => "bg-warning text-dark", "SOC" => "bg-dark text-light", "SASE" => "bg-info text-light", "CALIDAD Y PROCESOS" => "bg-light text-dark", "INCIDENT RESPONSE" => "bg-danger text-light");
        foreach ($datos as $row) {
            $sub_array = array();
            switch ($row['prioridad']) {
                case '1':
                    $sub_array[] = strlen($row['titulo']) > 50
                        ? '<span class="badge bg-light border border-success text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . substr($row['titulo'], 0, 47) . '...' . '</span>'
                        : '<span class="badge bg-light border border-success text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . $row['titulo'] . '</span>';
                    break;

                case '2':
                    $sub_array[] = strlen($row['titulo']) > 50
                        ? '<span class="badge bg-light border border-warning text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . substr($row['titulo'], 0, 47) . '...' . '</span>'
                        : '<span class="badge bg-light border border-warning text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . $row['titulo'] . '</span>';
                    break;

                case '3':
                    $sub_array[] = strlen($row['titulo']) > 50
                        ? '<span class="badge bg-light border border-danger text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . substr($row['titulo'], 0, 47) . '...' . '</span>'
                        : '<span class="badge bg-light border border-danger text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . $row['titulo'] . '</span>';
                    break;
            }
            $sub_array[] = $row['fech_inicio'] == '' ? 'Sin fecha' : '<span class="badge bg-light text-dark">' . $row['fech_inicio'] . '</span>';
            $sub_array[] = $row['fech_fin'] == '' ? 'Sin fecha' : '<span class="badge bg-light text-dark">' . $row['fech_fin'] . '</span>';
            $sub_array[] = '<span class="badge bg-light text-dark">' . $row['creador_proy'] . '</span';
            $sub_array[] = strlen($row['cats_nom']) > 20
                ? '<span class="badge bg-light text-dark">' . substr($row['cats_nom'], 0, 17) . '...' . '</span>'
                : '<span class="badge bg-light text-dark">' . $row['cats_nom'] . '</span>';
            $sub_array[] = $row['hs_dimensionadas'] == "" ? "Sin hs" : '<span class="badge bg-light text-dark">' . $row['hs_dimensionadas'] . '</span';
            $sub_array[] = isset($row['usu_nom_asignado']) == '' ? '<span type="button" onclick="asignar_proyecto(' . $row['id_proyecto_cantidad_servicios'] . ')" data-placement="top" title="Asignarme el proyecto" class="badge bg-light border border-dark text-dark">Sin asignar</span>' : '<span class="badge bg-info text-light">' . $row['usu_nom_asignado'] . '</span>';

            if (isset($row['usu_nom_asignado']) && $row['usu_nom_asignado'] != '') {
                switch ($row['estados_id']) {
                    case '1':
                        $sub_array[] = '<span type="button" onclick="ver_hosts_eh(' . $row['id_proyecto_cantidad_servicios'] . ' )"><i class="text-secondary fs-18 ri-global-line" data-placement="top" title="Ver hosts"></i></span>';
                        break;
                    case '2':
                        $sub_array[] = '<span type="button" onclick="ver_hosts_eh(' . $row['id_proyecto_cantidad_servicios'] . ' )"><i class="text-secondary fs-18 ri-global-line" data-placement="top" title="Ver hosts"></i></span>';
                        $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '"rel="noopener noreferrer" title="Ver proyecto"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';

                        break;
                }
            }
            if (isset($row['usu_nom_asignado']) && $row['usu_nom_asignado'] != '') {
                switch ($row['estados_id']) {
                    case '1':
                        $sub_array[] = '<div class="btn-group btn-group-sm p-0" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group p-0" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-primary btn-sm dropdown-toggle py-0" data-bs-toggle="dropdown" aria-expanded="false">
                                Estado
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a class="dropdown-item" type="button" onclick="cambiar_a_abierto(' . $row['id_proyecto_cantidad_servicios'] . ')">Abierto</a></li>
                                <li><a class="dropdown-item" type="button" onclick="cambiar_a_borrador(' . $row['id_proyecto_cantidad_servicios'] . ')">Borrador</a></li>
                            </ul>
                        </div>
                    </div>';
                        break;

                    case '2':
                        $sub_array[] = '<div class="btn-group btn-group-sm p-0" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group p-0" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-primary btn-sm dropdown-toggle py-0" data-bs-toggle="dropdown" aria-expanded="false">
                                Estado
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a class="dropdown-item" type="button" onclick="cambiar_a_nuevo(' . $row['id_proyecto_cantidad_servicios'] . ')">Nuevos</a></li>
                                <li><a class="dropdown-item" type="button" onclick="cambiar_a_borrador(' . $row['id_proyecto_cantidad_servicios'] . ')">Borrador</a></li>
                                </ul>
                        </div>
                    </div>';
                        // <li><a class="dropdown-item" type="button" onclick="cambiar_a_realizado(' . $row['id_proyecto_cantidad_servicios'] . ')">Realizados</a></li>
                        break;

                    case '3':
                        $sub_array[] = '<span type="button" onclick="ver_hosts_eh(' . $row['id_proyecto_cantidad_servicios'] . ' )"><i class="text-secondary fs-18 ri-global-line" data-placement="top" title="Ver hosts"></i></span>';
                        $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '" rel="noopener noreferrer" title="Ver proyecto"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';
                        break;
                    case '4':
                        $sub_array[] = '<span type="button" onclick="ver_hosts_eh(' . $row['id_proyecto_cantidad_servicios'] . ' )"><i class="text-secondary fs-18 ri-global-line" data-placement="top" title="Ver hosts"></i></span>';
                        $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '" target="_blank" rel="noopener noreferrer" title="Ver proyecto"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';
                        break;
                    default:
                        break;
                }
            } else {
                $sub_array[] = '<span type="button" onclick="ver_hosts_eh(' . $row['id_proyecto_cantidad_servicios'] . ' )"><i class="text-secondary fs-18 ri-global-line" data-placement="top" title="Ver hosts"></i></span>';
                $sub_array[] = '<span class="badge bg-primary text-light px-2 py-1">Pendiente</span>';
            }
            $data[] = $sub_array;
        }
        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($results);
        break;

    case 'get_proyectos_sase':
        $datos = $proyecto->get_proyectos_sase($_POST['sector_id'], $_POST['cat_id'], $_POST['estados_id']);
        $data = array();
        $colores = array("ETHICAL HACKING" => "bg-warning text-dark", "SOC" => "bg-dark text-light", "SASE" => "bg-info text-light", "CALIDAD Y PROCESOS" => "bg-light text-dark", "INCIDENT RESPONSE" => "bg-danger text-light");
        foreach ($datos as $row) {
            $sub_array = array();
            switch ($row['prioridad']) {
                case '1':
                    $sub_array[] = strlen($row['titulo']) > 50
                        ? '<span class="badge bg-light border border-success text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . substr($row['titulo'], 0, 47) . '...' . '</span>'
                        : '<span class="badge bg-light border border-success text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . $row['titulo'] . '</span>';
                    break;

                case '2':
                    $sub_array[] = strlen($row['titulo']) > 50
                        ? '<span class="badge bg-light border border-warning text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . substr($row['titulo'], 0, 47) . '...' . '</span>'
                        : '<span class="badge bg-light border border-warning text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . $row['titulo'] . '</span>';
                    break;

                case '3':
                    $sub_array[] = strlen($row['titulo']) > 50
                        ? '<span class="badge bg-light border border-danger text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . substr($row['titulo'], 0, 47) . '...' . '</span>'
                        : '<span class="badge bg-light border border-danger text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . $row['titulo'] . '</span>';
                    break;
            }
            $sub_array[] = $row['fech_inicio'] == '' ? 'Sin fecha' : '<span class="badge bg-light text-dark">' . $row['fech_inicio'] . '</span>';
            $sub_array[] = $row['fech_fin'] == '' ? 'Sin fecha' : '<span class="badge bg-light text-dark">' . $row['fech_fin'] . '</span>';
            $sub_array[] = '<span class="badge bg-light text-dark">' . $row['creador_proy'] . '</span';
            $sub_array[] = strlen($row['cats_nom']) > 20
                ? '<span class="badge bg-light text-dark">' . substr($row['cats_nom'], 0, 17) . '...' . '</span>'
                : '<span class="badge bg-light text-dark">' . $row['cats_nom'] . '</span>';
            $sub_array[] = $row['hs_dimensionadas'] == "" ? "Sin hs" : '<span class="badge bg-light text-dark">' . $row['hs_dimensionadas'] . '</span';
            $sub_array[] = isset($row['usu_nom_asignado']) == '' ? '<span type="button" onclick="asignar_proyecto(' . $row['id_proyecto_cantidad_servicios'] . ')" data-placement="top" title="Asignarme el proyecto" class="badge bg-light border border-dark text-dark">Sin asignar</span>' : '<span class="badge bg-info text-light">' . $row['usu_nom_asignado'] . '</span>';

            if (isset($row['usu_nom_asignado']) && $row['usu_nom_asignado'] != '') {
                switch ($row['estados_id']) {
                    case '1':
                        $sub_array[] = '<span type="button" onclick="ver_hosts_eh(' . $row['id_proyecto_cantidad_servicios'] . ' )"><i class="text-secondary fs-18 ri-global-line" data-placement="top" title="Ver hosts"></i></span>';
                        break;
                    case '2':
                        $sub_array[] = '<span type="button" onclick="ver_hosts_eh(' . $row['id_proyecto_cantidad_servicios'] . ' )"><i class="text-secondary fs-18 ri-global-line" data-placement="top" title="Ver hosts"></i></span>';
                        $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '" target="_blank" rel="noopener noreferrer" title="Ver proyecto"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';

                        break;
                }
            }
            if (isset($row['usu_nom_asignado']) && $row['usu_nom_asignado'] != '') {
                switch ($row['estados_id']) {
                    case '1':
                        $sub_array[] = '<div class="btn-group btn-group-sm p-0" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group p-0" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-primary btn-sm dropdown-toggle py-0" data-bs-toggle="dropdown" aria-expanded="false">
                                Estado
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a class="dropdown-item" type="button" onclick="cambiar_a_abierto(' . $row['id_proyecto_cantidad_servicios'] . ')">Abierto</a></li>
                                <li><a class="dropdown-item" type="button" onclick="cambiar_a_borrador(' . $row['id_proyecto_cantidad_servicios'] . ')">Borrador</a></li>
                            </ul>
                        </div>
                    </div>';
                        break;

                    case '2':
                        $sub_array[] = '<div class="btn-group btn-group-sm p-0" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group p-0" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-primary btn-sm dropdown-toggle py-0" data-bs-toggle="dropdown" aria-expanded="false">
                                Estado
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                <li><a class="dropdown-item" type="button" onclick="cambiar_a_nuevo(' . $row['id_proyecto_cantidad_servicios'] . ')">Nuevos</a></li>
                                <li><a class="dropdown-item" type="button" onclick="cambiar_a_borrador(' . $row['id_proyecto_cantidad_servicios'] . ')">Borrador</a></li>
                                </ul>
                        </div>
                    </div>';
                        // <li><a class="dropdown-item" type="button" onclick="cambiar_a_realizado(' . $row['id_proyecto_cantidad_servicios'] . ')">Realizados</a></li>
                        break;

                    case '3':
                        $sub_array[] = '<span type="button" onclick="ver_hosts_eh(' . $row['id_proyecto_cantidad_servicios'] . ' )"><i class="text-secondary fs-18 ri-global-line" data-placement="top" title="Ver hosts"></i></span>';
                        $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '" target="_blank" rel="noopener noreferrer" title="Ver proyecto"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';

                        break;
                    case '4':
                        $sub_array[] = '<span type="button" onclick="ver_hosts_eh(' . $row['id_proyecto_cantidad_servicios'] . ' )"><i class="text-secondary fs-18 ri-global-line" data-placement="top" title="Ver hosts"></i></span>';
                        $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '" target="_blank" rel="noopener noreferrer" title="Ver proyecto"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';

                        break;
                    default:
                        break;
                }
            } else {
                $sub_array[] = '<span type="button" onclick="ver_hosts_eh(' . $row['id_proyecto_cantidad_servicios'] . ' )"><i class="text-secondary fs-18 ri-global-line" data-placement="top" title="Ver hosts"></i></span>';
                $sub_array[] = '<span class="badge bg-primary text-light px-2 py-1">Pendiente</span>';
            }
            $data[] = $sub_array;
        }
        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($results);
        break;

    case 'get_proyectos_nuevos_vista_calidad':
        $datos = $proyecto->get_proyectos_nuevos_vista_calidad($_POST['sector_id'], $_POST['estados_id']);
        $data = array();
        $colores = array("ETHICAL HACKING" => "bg-warning text-dark", "SOC" => "bg-dark text-light", "SASE" => "bg-info text-light", "CALIDAD Y PROCESOS" => "bg-light text-dark", "INCIDENT RESPONSE" => "bg-danger text-light");
        foreach ($datos as $row) {
            $sub_array = array();
            switch ($row['prioridad']) {
                case '1':
                    $sub_array[] = strlen($row['titulo']) > 50
                        ? '<span class="badge bg-light border border-success text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . substr($row['titulo'], 0, 47) . '...' . '</span>'
                        : '<span class="badge bg-light border border-success text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . $row['titulo'] . '</span>';
                    break;

                case '2':
                    $sub_array[] = strlen($row['titulo']) > 50
                        ? '<span class="badge bg-light border border-warning text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . substr($row['titulo'], 0, 47) . '...' . '</span>'
                        : '<span class="badge bg-light border border-warning text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . $row['titulo'] . '</span>';
                    break;

                case '3':
                    $sub_array[] = strlen($row['titulo']) > 50
                        ? '<span class="badge bg-light border border-danger text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . substr($row['titulo'], 0, 47) . '...' . '</span>'
                        : '<span class="badge bg-light border border-danger text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . $row['titulo'] . '</span>';
                    break;
            }
            $sub_array[] = $row['fech_inicio'] == '' ? 'Sin fecha' : '<span class="badge bg-light text-dark">' . $row['fech_inicio'] . '</span>';
            $sub_array[] = $row['fech_fin'] == '' ? 'Sin fecha' : '<span class="badge bg-light text-dark">' . $row['fech_fin'] . '</span>';
            $sub_array[] = '<span class="badge bg-light text-dark">' . $row['creador_proy'] . '</span';
            $sub_array[] = strlen($row['cat_nom']) > 10
                ? '<span class="badge bg-light text-dark" data-placement="top" title="' . $row['cat_nom'] . '">' . substr($row['cat_nom'], 0, 10) . '...' . '</span>'
                : '<span class="badge bg-light text-dark" data-placement="top" title="' . $row['cat_nom'] . '">' . $row['cat_nom'] . '</span>';
            $sub_array[] = strlen($row['cats_nom']) > 10
                ? '<span class="badge bg-light text-dark" data-placement="top" title="' . $row['cats_nom'] . '">' . substr($row['cats_nom'], 0, 10) . '...' . '</span>'
                : '<span class="badge bg-light text-dark" data-placement="top" title="' . $row['cats_nom'] . '">' . $row['cats_nom'] . '</span>';
            $sub_array[] = $row['hs_dimensionadas'] == "" ? "Sin hs" : '<span class="badge bg-light text-dark">' . $row['hs_dimensionadas'] . '</span';
            switch ($_SESSION['sector_id']) {
                case '1':
                    $sub_array[] = isset($row['usu_nom_asignado']) == '' ? '<span type="button" onclick="asignar_proyecto(' . $row['id_proyecto_cantidad_servicios'] . ')" data-placement="top" title="Asignarme el proyecto" class="badge bg-light border border-dark text-dark">Sin asignar</span>' : '<span class="badge bg-light border border-info text-light">' . $row['usu_asignado'] . '</span>';
                    break;
                default:
                    $sub_array[] = isset($row['usu_nom_asignado']) == '' ? '<span class="badge bg-light text-dark">Sin asignar</span>' : '<span class="badge bg-info text-light">' . $row['usu_nom_asignado'] . '</span>';
                    break;
            }
            $sub_array[] = '<span type="button" onclick="ver_hosts_eh(' . $row['id_proyecto_cantidad_servicios'] . ' )"><i class="text-secondary fs-18 ri-global-line" data-placement="top" title="Ver hosts"></i></span>';
            switch ($row['estados_id']) {
                case '1':
                    $sub_array[] = '<div class="btn-group btn-group-sm p-0" role="group" aria-label="Button group with nested dropdown">
                                <div class="btn-group p-0" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary btn-sm dropdown-toggle py-0" data-bs-toggle="dropdown" aria-expanded="false">
                                        Estado
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <li><a class="dropdown-item" type="button" onclick="cambiar_proy_eh_desde_calidad_pentest(' . $row['id_proyecto_cantidad_servicios'] . ')">Borrador</a></li>
                                    </ul>
                                </div>
                            </div>';
                    break;

                case '2':
                    $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '" rel="noopener noreferrer" title="Trabajar"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';
                    break;

                case '3':
                    $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '" target="_blank" rel="noopener noreferrer" title="Ver proyecto"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';
                    $sub_array[] = '<div class="btn-group btn-group-sm p-0" role="group" aria-label="Button group with nested dropdown">
                                <div class="btn-group p-0" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary btn-sm dropdown-toggle py-0" data-bs-toggle="dropdown" aria-expanded="false">
                                        Estado
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <li><a class="dropdown-item" type="button" onclick="cerrar_proyecto(' . $row['id_proyecto_cantidad_servicios'] . ')">Cerrar proyecto</a></li>
                                    </ul>
                                </div>
                            </div>';
                    break;

                case '4':
                    $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '" rel="noopener noreferrer" title="Trabajar"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';
                    break;
            }
            $data[] = $sub_array;
        }
        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($results);
        break;

    case 'get_proyectos_en_proceso_vista_calidad':
        $datos = $proyecto->get_proyectos_en_proceso_vista_calidad();
        $data = array();
        $colores = array("ETHICAL HACKING" => "bg-warning text-dark", "SOC" => "bg-dark text-light", "SASE" => "bg-info text-light", "CALIDAD Y PROCESOS" => "bg-light text-dark", "INCIDENT RESPONSE" => "bg-danger text-light");
        foreach ($datos as $row) {
            $sub_array = array();
            switch ($row['prioridad']) {
                case '1':
                    $sub_array[] = strlen($row['titulo']) > 50
                        ? '<span class="badge bg-light border border-success text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . substr($row['titulo'], 0, 35) . '...' . '</span>'
                        : '<span class="badge bg-light border border-success text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . $row['titulo'] . '</span>';
                    break;

                case '2':
                    $sub_array[] = strlen($row['titulo']) > 50
                        ? '<span class="badge bg-light border border-warning text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . substr($row['titulo'], 0, 35) . '...' . '</span>'
                        : '<span class="badge bg-light border border-warning text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . $row['titulo'] . '</span>';
                    break;

                case '3':
                    $sub_array[] = strlen($row['titulo']) > 50
                        ? '<span class="badge bg-light border border-danger text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . substr($row['titulo'], 0, 35) . '...' . '</span>'
                        : '<span class="badge bg-light border border-danger text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . $row['titulo'] . '</span>';
                    break;
            }
            $sub_array[] = $row['fech_inicio'] == '' ? 'Sin fecha' : '<span class="badge bg-light text-dark">' . $row['fech_inicio'] . '</span>';
            $sub_array[] = $row['fech_fin'] == '' ? 'Sin fecha' : '<span class="badge bg-light text-dark">' . $row['fech_fin'] . '</span>';
            $sub_array[] = '<span class="badge bg-light text-dark">' . $row['creador_proy'] . '</span';
            $sub_array[] = strlen($row['cat_nom']) > 10
                ? '<span class="badge bg-light text-dark" data-placement="top" title="' . $row['cat_nom'] . '">' . substr($row['cat_nom'], 0, 10) . '...' . '</span>'
                : '<span class="badge bg-light text-dark" data-placement="top" title="' . $row['cat_nom'] . '">' . $row['cat_nom'] . '</span>';
            $sub_array[] = strlen($row['cats_nom']) > 8
                ? '<span class="badge bg-light text-dark" data-placement="top" title="' . $row['cats_nom'] . '">' . substr($row['cats_nom'], 0, 8) . '...' . '</span>'
                : '<span class="badge bg-light text-dark" data-placement="top" title="' . $row['cats_nom'] . '">' . $row['cats_nom'] . '</span>';
            $sub_array[] = $row['hs_dimensionadas'] == "" ? "Sin hs" : '<span class="badge bg-light text-dark">' . $row['hs_dimensionadas'] . '</span';
            switch ($_SESSION['sector_id']) {
                case '1':
                    $sub_array[] = isset($row['usu_nom_asignado']) == '' ? '<span type="button" onclick="asignar_proyecto(' . $row['id_proyecto_cantidad_servicios'] . ')" data-placement="top" title="Asignarme el proyecto" class="badge bg-light border border-dark text-dark">Sin asignar</span>' : '<span class="badge bg-light border border-info text-light">' . $row['usu_asignado'] . '</span>';
                    break;
                default:
                    $sub_array[] = isset($row['usu_nom_asignado']) == '' ? '<span class="badge bg-light text-dark">Sin asignar</span>' : '<span class="badge bg-info text-light">' . $row['usu_nom_asignado'] . '</span>';
                    break;
            }

            switch ((string) $row['estados_id']) {
                case '1':
                    $sub_array[] = '<span class="badge border border-success text-dark">NUEVO</span>';
                    break;
                case '2':
                    $sub_array[] = '<span class="badge bg-success text-light">ABIERTO</span>';
                    break;
                default:
                    $sub_array[] = '<span class="badge bg-light text-muted">N/A</span>';
                    break;
            }

            $sub_array[] = strlen($row['sector_nombre']) > 8 ? '<span title="' . $row['sector_nombre'] . '"  class="badge bg-light text-dark">' . substr($row['sector_nombre'], 0, 8) . '... ' . '</span>' : '<span class="badge bg-light text-dark">' . $row['sector_nombre'] . '... ' . '</span>';
            $sub_array[] = '<span type="button" onclick="ver_hosts_eh(' . $row['id_proyecto_cantidad_servicios'] . ' )"><i class="text-secondary fs-18 ri-global-line" data-placement="top" title="Ver hosts"></i></span>';

            switch ($row['sector_id']) {
                case '1':
                    $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '"rel="noopener noreferrer" title="Ver proyecto"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';
                    break;
                case '2':
                    $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '"rel="noopener noreferrer" title="Ver proyecto"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';
                    break;
                case '3':
                    $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '"rel="noopener noreferrer" title="Ver proyecto"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';
                    break;
                case '4':
                    $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '"rel="noopener noreferrer" title="Ver proyecto"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';
                    break;
                case '5':
                    $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '"rel="noopener noreferrer" title="Ver proyecto"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';
                    break;
                default:
                    $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '"rel="noopener noreferrer" title="Ver proyecto"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';
                    break;
            }
            $sub_array[] = '<div class="btn-group btn-group-sm p-0" role="group" aria-label="Button group with nested dropdown">
                                <div class="btn-group p-0" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary btn-sm dropdown-toggle py-0" data-bs-toggle="dropdown" aria-expanded="false">
                                        Estado
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <li><a class="dropdown-item" type="button" onclick="cambiar_a_borrador(' . $row['id_proyecto_cantidad_servicios'] . ')">Borrador</a></li>
                                    </ul>
                                </div>
                            </div>';
            $data[] = $sub_array;
        }
        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($results);
        break;

    case 'get_proyectos_realizados_vista_calidad':
        $datos = $proyecto->get_proyectos_realizados_vista_calidad($_POST['estados_id']);
        $data = array();
        $colores = array("ETHICAL HACKING" => "bg-warning text-dark", "SOC" => "bg-dark text-light", "SASE" => "bg-info text-light", "CALIDAD Y PROCESOS" => "bg-light text-dark", "INCIDENT RESPONSE" => "bg-danger text-light");
        foreach ($datos as $row) {
            $sub_array = array();
            switch ($row['prioridad']) {
                case '1':
                    $sub_array[] = strlen($row['titulo']) > 50
                        ? '<span class="badge bg-light border border-success text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . substr($row['titulo'], 0, 47) . '...' . '</span>'
                        : '<span class="badge bg-light border border-success text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . $row['titulo'] . '</span>';
                    break;

                case '2':
                    $sub_array[] = strlen($row['titulo']) > 50
                        ? '<span class="badge bg-light border border-warning text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . substr($row['titulo'], 0, 47) . '...' . '</span>'
                        : '<span class="badge bg-light border border-warning text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . $row['titulo'] . '</span>';
                    break;

                case '3':
                    $sub_array[] = strlen($row['titulo']) > 50
                        ? '<span class="badge bg-light border border-danger text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . substr($row['titulo'], 0, 47) . '...' . '</span>'
                        : '<span class="badge bg-light border border-danger text-dark" data-placement="top" title="' . $row['titulo'] . ' - Prioridad ' . $row['prioridad_nom'] . '">' . $row['titulo'] . '</span>';
                    break;
            }
            $sub_array[] = $row['fech_inicio'] == '' ? 'Sin fecha' : '<span class="badge bg-light text-dark">' . $row['fech_inicio'] . '</span>';
            $sub_array[] = $row['fech_fin'] == '' ? 'Sin fecha' : '<span class="badge bg-light text-dark">' . $row['fech_fin'] . '</span>';
            $sub_array[] = '<span class="badge bg-light text-dark">' . $row['creador_proy'] . '</span';
            $sub_array[] = strlen($row['cat_nom']) > 10
                ? '<span class="badge bg-light text-dark" data-placement="top" title="' . $row['cat_nom'] . '">' . substr($row['cat_nom'], 0, 10) . '...' . '</span>'
                : '<span class="badge bg-light text-dark" data-placement="top" title="' . $row['cat_nom'] . '">' . $row['cat_nom'] . '</span>';
            $sub_array[] = strlen($row['cats_nom']) > 10
                ? '<span class="badge bg-light text-dark" data-placement="top" title="' . $row['cats_nom'] . '">' . substr($row['cats_nom'], 0, 10) . '...' . '</span>'
                : '<span class="badge bg-light text-dark" data-placement="top" title="' . $row['cats_nom'] . '">' . $row['cats_nom'] . '</span>';
            $sub_array[] = $row['hs_dimensionadas'] == "" ? "Sin hs" : '<span class="badge bg-light text-dark">' . $row['hs_dimensionadas'] . '</span';
            switch ($_SESSION['sector_id']) {
                case '1':
                    $sub_array[] = isset($row['usu_nom_asignado']) == '' ? '<span type="button" onclick="asignar_proyecto(' . $row['id_proyecto_cantidad_servicios'] . ')" data-placement="top" title="Asignarme el proyecto" class="badge bg-light border border-dark text-dark">Sin asignar</span>' : '<span class="badge bg-light border border-info text-light">' . $row['usu_asignado'] . '</span>';
                    break;
                default:
                    $sub_array[] = isset($row['usu_nom_asignado']) == '' ? '<span class="badge bg-light text-dark">Sin asignar</span>' : '<span class="badge bg-info text-light">' . $row['usu_nom_asignado'] . '</span>';
                    break;
            }
            $sub_array[] = '<span type="button" onclick="ver_hosts_eh(' . $row['id_proyecto_cantidad_servicios'] . ' )"><i class="text-secondary fs-18 ri-global-line" data-placement="top" title="Ver hosts"></i></span>';
            switch ($row['estados_id']) {
                case '1':
                    $sub_array[] = '<div class="btn-group btn-group-sm p-0" role="group" aria-label="Button group with nested dropdown">
                                <div class="btn-group p-0" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary btn-sm dropdown-toggle py-0" data-bs-toggle="dropdown" aria-expanded="false">
                                        Estado
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <li><a class="dropdown-item" type="button" onclick="cambiar_proy_eh_desde_calidad_pentest(' . $row['id_proyecto_cantidad_servicios'] . ')">Borrador</a></li>
                                    </ul>
                                </div>
                            </div>';
                    break;

                case '2':
                    $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '" target="_blank" rel="noopener noreferrer" title="Ver proyecto"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';
                    break;

                case '3':
                    $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '" target="_blank" rel="noopener noreferrer" title="Ver proyecto"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';
                    $sub_array[] = '<div class="btn-group btn-group-sm p-0" role="group" aria-label="Button group with nested dropdown">
                                <div class="btn-group p-0" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary btn-sm dropdown-toggle py-0" data-bs-toggle="dropdown" aria-expanded="false">
                                        Estado
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <li><a class="dropdown-item" type="button" onclick="cerrar_proyecto(' . $row['id_proyecto_cantidad_servicios'] . ')">Cerrar proyecto</a></li>
                                        <li><a class="dropdown-item" type="button" onclick="cambiar_proy_a_borrador(' . $row['id_proyecto_cantidad_servicios'] . ')">Borrador</a></li>
                                    </ul>
                                </div>
                            </div>';
                    break;

                case '4':
                    $sub_array[] = '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '"rel="noopener noreferrer" title="Ver proyecto"><i class="ri-send-plane-fill text-primary fs-18"></i></a>';
                    break;
            }
            $data[] = $sub_array;
        }
        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($results);
        break;

    case 'insert_descripciones_proyecto':
        Validaciones::$errores_archivos = [];

        $id_proyecto_cantidad_servicios = $_POST['id_proyecto_cantidad_servicios'];
        $usu_crea = $_SESSION['usu_id'];
        $descripcion = $_POST['descripcion_proyecto'];
        $captura = $_POST['captura_imagen'];

        // Paso 1: insertar y obtener ID y HASH
        $result = $proyecto->insert_descripciones_proyecto_get_id(
            $id_proyecto_cantidad_servicios,
            $usu_crea,
            $descripcion,
            $captura
        );

        $id_nota = $result["id"];
        $hash_folder = $result["hash"];

        // Paso 2: procesar archivos
        $archivos_subidos = [];

        if (isset($_FILES['documento'])) {
            foreach ($_FILES['documento']['tmp_name'] as $key => $tmp_name) {
                $archivo = [
                    'name' => $_FILES['documento']['name'][$key],
                    'type' => $_FILES['documento']['type'][$key],
                    'tmp_name' => $_FILES['documento']['tmp_name'][$key],
                    'error' => $_FILES['documento']['error'][$key],
                    'size' => $_FILES['documento']['size'][$key]
                ];

                $nombre_archivo = Validaciones::guardar_archivo_descripcion_proyecto($archivo, $hash_folder);
                if ($nombre_archivo !== null) {
                    $archivos_subidos[] = $nombre_archivo;
                }
            }

            // Si hay errores, devolvemos error
            if (!empty(Validaciones::$errores_archivos)) {
                echo json_encode([
                    "status" => "error",
                    "mensaje" => "Algunos archivos no se pudieron subir.",
                    "errores" => Validaciones::$errores_archivos
                ]);
                exit;
            }
        }

        // Paso 3: asociar archivos a la nota
        $documentos_concatenados = implode(",", $archivos_subidos);
        $proyecto->asociar_documentos_a_descripcion($id_nota, $documentos_concatenados);

        // Éxito final
        echo json_encode([
            "status" => "ok",
            "mensaje" => "Nota guardada correctamente.",
            "archivos_guardados" => $archivos_subidos
        ]);
        exit;

    case 'finalizar_proyecto':
        $proyecto->finalizar_proyecto($_POST['estados_id'], $_POST['id_proyecto_cantidad_servicios']);
        break;

    case 'finalizar_proyecto_tabla_estados_proyecto':
        $proyecto->finalizar_proyecto_tabla_estados_proyecto($_POST['id_proyecto_cantidad_servicios'], $_SESSION['usu_id'], $_POST['estados_id']);
        break;

    case 'get_datos_usuario_finalizador_proyecto':
        $datos = $proyecto->get_datos_usuario_finalizador_proyecto($_POST['id_proyecto_cantidad_servicios']);
        ?>
<span>Finalizado el <?php echo $datos->fecha_cierre_proyecto; ?></span>
<span>por <?php echo $datos->usu_nom; ?></span>
<span>de <?php echo $datos->sector_nombre; ?></span>
<?php
        break;

    case 'get_descripciones_proyecto':
        $data = $proyecto->get_descripciones_proyecto($_POST['id_proyecto_cantidad_servicios']);
        foreach ($data as $key => $val) {
        ?>
<div class="d-flex align-items-center mt-4">
    <div class="flex-grow-1 ms-2">
        <h6 id="colaborador_descripcion" class="mb-1"><a>
                <i class="ri-add-circle-fill fs-14 text-secondary"></i>
                <?php echo $val['usu_nom'] ?> <span class="text-muted">(<span id="fecha_descripcion"
                        class="text-muted fs-12"><?php echo $val['fech_crea'] ?></span>)</span></a>
        </h6>
        <p id="sector_descripcion" class="text-muted fs-11" style="margin-left: 1rem;">
            <?php echo $val['sector_nombre'] ?></p>
    </div>
</div>
<div class="d-flex">
    <p class="ms-5"><strong style="margin-right: 10px;">Nota:</strong> <?php echo $val['descripcion_proyecto'] ?></p>
    <?php if (isset($_SESSION) && $_SESSION['usu_id'] == $val['usu_crea'] && $val['estados_id'] != 3) : ?>
    <br><i id="btn_eliminar_descripcion" data-placement="top" title="Eliminar" type="button"
        onclick="eliminar_descripcion(<?php echo $val['id'] ?>)"
        class=" ri-delete-bin-2-fill ms-3 fs-14 text-danger"></i>
    <?php endif; ?>
</div>

<?php if (isset($val['captura_imagen']) && !empty($val['captura_imagen'])) {
            ?>
<div style="width: 85%;" class="ms-5">
    <img src="<?php echo $val['captura_imagen'] ?>" width="100%" height="100%"
        alt="Imagen de Nota n° <?php echo $val['id'] ?>">
</div>
<?php
            }

            if (!empty($val['carpeta_documentos_proy']) && !empty($val['documento'])) {
                $archivos = explode(",", $val['documento']);
                $ruta_base = URL . "/View/Home/Public/Uploads/Proyectos/" . $val['carpeta_documentos_proy'] . "/";

                echo '<div class="ms-5 mt-1">';
                echo '<strong>Archivos subidos:</strong><br>';

                foreach ($archivos as $archivo) {
                    $archivo = trim($archivo);
                    if ($archivo === '') continue;

                    $ext = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
                    $icono = 'ri-file-fill';
                    $color = 'text-dark';

                    switch ($ext) {
                        case 'pdf':
                            $icono = 'ri-file-ppt-fill';
                            $color = 'text-danger';
                            break;
                        case 'doc':
                        case 'docx':
                            $icono = 'ri-file-word-fill';
                            $color = 'text-primary';
                            break;
                        case 'xls':
                        case 'xlsx':
                            $icono = 'ri-file-excel-fill';
                            $color = 'text-success';
                            break;
                        case 'txt':
                            $icono = 'ri-file-text-fill';
                            $color = 'text-secondary';
                            break;
                        case 'jpg':
                        case 'jpeg':
                        case 'png':
                            $icono = 'ri-image-fill';
                            $color = 'text-warning';
                            break;
                        case 'zip':
                            $icono = 'ri-folder-zip-fill';
                            $color = 'text-muted';
                            break;
                        default:
                            $icono = 'ri-file-code-fill';
                            $color = 'text-dark';
                    }

                    $ruta_completa = $ruta_base . $archivo;
                    echo "<div class='d-flex align-items-center mb-1'>
                <i class='me-1 $icono $color fs-16'></i>
                <a href='$ruta_completa' target='_blank'>$archivo</a>
              </div>";
                }
                echo '</div>';
            }
            ?>
<br>
<?php
        }
        break;

    case 'delete_descripciones_proyecto':
        $proyecto->delete_descripciones_proyecto($_POST['id']);
        break;

    case 'update_estado_proy':
        $proyecto->update_estado_proy($_POST['id_proyecto_cantidad_servicios'], $_POST['estados_id']);
        break;

    case 'tomar_proyecto':
        $proyecto->tomar_proyecto($_SESSION['usu_id'], $_POST['id_proyecto_cantidad_servicios']);
        break;

    case 'get_datos_proyecto_gestionado':
        echo json_encode($proyecto->get_datos_proyecto_gestionado($_POST['id_proyecto_cantidad_servicios']));
        break;

    case 'grafico_get_total_servicios':
        echo json_encode($proyecto->grafico_get_total_servicios($_SESSION['sector_id']));
        break;

    case 'asignar_fecha_proyecto_finalizado_sin_fecha_fin':
        $proyecto->asignar_fecha_proyecto_finalizado_sin_fecha_fin($_POST['id_proyecto_cantidad_servicios'], $_POST['fech_fin']);
        break;

    case 'grafico_get_total_servicios_por_sector':
        echo json_encode($proyecto->grafico_get_total_servicios_por_sector());
        break;

    case 'get_sectores_x_sector_id':
        $data = $proyecto->get_sectores_x_sector_id($_SESSION['sector_id']);
        foreach ($data as $val) {
        ?>
<div class="col" style="min-width: 150px; flex: 0 0 auto; text-align: center;">
    <div class="py-1 border border-light">
        <h5 class="text-muted text-uppercase fs-13 text-center px-1">
            <?php echo $val['cat_nom'] ?>
            <?php if (!empty($val['total'])): ?>
            <i title="Nuevos para trabajar" class="ri-add-circle-fill text-success fs-16 float-end align-middle"></i>
            <?php else: ?>
            <i title="Sin proyectos para trabajar"
                class="ri-indeterminate-circle-fill text-danger fs-16 float-end align-middle"></i>
            <?php endif; ?>
        </h5>
        <div class="d-flex align-items-center">
            <div class="flex-grow-1 ms-3">
                <h5 class="mb-0">
                    <span class="counter-value" data-target="<?php echo $val['total'] ?>">
                        <?php echo $val['total'] ?>
                    </span>
                </h5>
            </div>
        </div>
    </div>
</div>
<?php
        }
        break;

    case 'get_proyectos_total':
        $datos = $proyecto->get_proyectos_total();
        $data = array();
        $colores = array("ETHICAL HACKING" => "bg-warning text-dark", "SOC" => "bg-dark text-light", "SASE" => "bg-info text-light", "CALIDAD Y PROCESOS" => "bg-light text-dark", "INCIDENT RESPONSE" => "bg-danger text-light");
        foreach ($datos as $row) {
            $sub_array = array();

            $sub_array[] = strlen($row['titulo']) > 50
                ? '<span class="badge bg-light border border-success text-dark" title="' . $row['titulo'] . '">' . substr($row['titulo'], 0, 47) . '...' . '</span>'
                : '<span class="badge bg-light border border-success text-dark" title="' . $row['titulo'] . '">' . $row['titulo'] . '</span>';

            $sub_array[] = '<span class="badge bg-light border border-dark text-dark">' . $row['refProy'] . '</span>';
            $sub_array[] = '<span class="badge bg-light border border-dark text-dark">' . $row['creador_proy'] . '</span>';

            // ✅ Corregido el isset
            $sub_array[] = empty($row['usu_nom_asignado'])
                ? '<span>Sin asignar</span>'
                : '<span class="badge bg-light border border-dark text-dark">' . $row['sector_nombre'] . '</span>';

            $sub_array[] = empty($row['usu_nom_asignado'])
                ? '<span>Sin asignar</span>'
                : '<span class="badge bg-light text-dark">' . $row['usu_nom_asignado'] . '</span>';

            // ✅ Estado visual (por estados_id)
            switch ((string) $row['estados_id']) {
                case '1':
                    $sub_array[] = '<span class="badge border border-success text-dark">NUEVO</span>';
                    break;
                case '2':
                    $sub_array[] = '<span class="badge bg-success text-light">ABIERTO</span>';
                    break;
                case '3':
                    $sub_array[] = '<span class="badge border border-secondary text-dark">REALIZADO</span>';
                    break;
                case '4':
                    $sub_array[] = '<span class="badge bg-secondary text-light">CERRADO</span>';
                    break;
                case '14':
                    $sub_array[] = '<span class="badge border border-dark text-dark">BORRADOR</span>';
                    break;
                case '15':
                    $sub_array[] = '<span class="badge border bg-warning text-dark">SIN IMPLEMENTAR</span>';
                    break;
                case '16':
                    $sub_array[] = '<span class="badge border border-danger text-dark">ELIMINADO</span>';
                    break;
                case '17':
                    $sub_array[] = '<span class="badge bg-dark text-light">CANCELADO</span>';
                    break;
                default:
                    $sub_array[] = '<span class="badge bg-light text-muted">N/A</span>';
                    break;
            }

            // ✅ Enlace seguro
            $sub_array[] = !empty($row['id_proyecto_cantidad_servicios'])
                ? '<a href="' . URL . '/View/Home/Gestion/Sectores/GestionarProy/?p=' . Openssl::set_ssl_encrypt($row['id_proyecto_cantidad_servicios']) . '" target="_blank" title="Ver proyecto"><i class="ri-send-plane-fill text-primary fs-18"></i></a>'
                : '<span class="badge bg-secondary">N/A</span>';

            $sub_array[] = '<div class="btn-group btn-group-sm p-0" role="group">
        <div class="btn-group p-0" role="group">
            <button type="button" class="btn btn-primary btn-sm dropdown-toggle py-0" data-bs-toggle="dropdown" aria-expanded="false">
                Estado
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" type="button" onclick="cambiar_a_nuevo(' . $row['id_proyecto_cantidad_servicios'] . ')">Nuevos</a></li>
                <li><a class="dropdown-item" type="button" onclick="cambiar_a_borrador(' . $row['id_proyecto_cantidad_servicios'] . ')">Borrador</a></li>
            </ul>
        </div>
    </div>';

            $data[] = $sub_array;
        }

        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($results);
        break;

    default:
        break;
}