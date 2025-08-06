<?php
class Proyectos extends Conexion
{
    public function get_paises()
    {
        $conn = parent::get_conexion();
        $sql = "SELECT * FROM tm_pais";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function crear_proyecto(int $usu_crea, int $client_id, int $pais_id, string $recurrencia, string $refPro, string $fechaVantive)
    {
        $conn = parent::get_conexion();
        $sql = "INSERT INTO proyectos (usu_crea,client_id,pais_id,recurrencia,refPro,fechaVantive,est) VALUES (?,?,?,?,?,?,1)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($usu_crea, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(2, htmlspecialchars($client_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(3, htmlspecialchars($pais_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(4, htmlspecialchars($recurrencia, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(5, htmlspecialchars($refPro, ENT_QUOTES), PDO::PARAM_STR);
        $stmt->bindValue(6, htmlspecialchars($fechaVantive, ENT_QUOTES), PDO::PARAM_STR);
        $stmt->execute();
    }

    public function get_proyectos_recurrentes()
    {
        $conn = parent::get_conexion();
        $sql = "SELECT pg.titulo, tc.cat_nom, c.client_rs, pg.id, COUNT(pr.id) AS recurrencias_total, 
        COUNT(CASE WHEN pr.est = 0 THEN 1 END) AS recurrencias_inactivas FROM proyecto_gestionado pg 
        JOIN tm_categoria tc ON pg.cat_id = tc.cat_id LEFT JOIN proyecto_recurrencia pr 
        ON pg.id = pr.id_proyecto_gestionado JOIN proyecto_cantidad_servicios pcs 
        ON pg.id_proyecto_cantidad_servicios = pcs.id JOIN proyectos p 
        ON pcs.proy_id = p.proy_id JOIN clientes c ON p.client_id = c.client_id 
        GROUP BY pg.titulo, tc.cat_nom, c.client_rs, pg.id 
        HAVING COUNT(CASE WHEN pr.est = 1 THEN 1 END) > 0";
        //         $sql = "SELECT 
        //     c.client_rs, 
        //     DATE_FORMAT(p.fech_crea, '%d-%m-%Y') AS fech_crea_formateada,
        //     tp.pais_nombre,
        //     pg.id AS id_proyecto_gestionado,
        //     COUNT(pr.id) AS recurrencias_total,
        //     COUNT(CASE WHEN pr.est = 0 THEN 1 END) AS recurrencias_inactivas
        // FROM proyecto_gestionado pg
        // JOIN proyecto_cantidad_servicios pcs ON pg.id_proyecto_cantidad_servicios = pcs.id
        // JOIN proyectos p ON pcs.proy_id = p.proy_id
        // JOIN clientes c ON p.client_id = c.client_id
        // JOIN tm_pais tp ON c.pais_id = tp.pais_id
        // LEFT JOIN proyecto_recurrencia pr ON pr.id_proyecto_gestionado = pg.id
        // WHERE pg.id = ?
        // GROUP BY c.client_rs, p.fech_crea, tp.pais_nombre, pg.id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_client_y_pais_para_proy_borrador($proy_id)
    {
        $conn = parent::get_conexion();
        //         $sql = "SELECT 
        //     c.client_rs, 
        //     DATE_FORMAT(p.fech_crea, '%d-%m-%Y') AS fech_crea,
        //     tp.pais_nombre,
        //     pg.id AS id_proyecto_gestionado,
        //     COUNT(pr.id) AS recurrencias_total,
        //     COUNT(CASE WHEN pr.est = 0 THEN 1 END) AS recurrencias_inactivas
        // FROM proyecto_gestionado pg
        // JOIN proyecto_cantidad_servicios pcs ON pg.id_proyecto_cantidad_servicios = pcs.id
        // JOIN proyectos p ON pcs.proy_id = p.proy_id
        // JOIN clientes c ON p.client_id = c.client_id
        // JOIN tm_pais tp ON c.pais_id = tp.pais_id
        // LEFT JOIN proyecto_recurrencia pr ON pr.id_proyecto_gestionado = pg.id
        // WHERE pg.id = ?
        // GROUP BY c.client_rs, p.fech_crea, tp.pais_nombre, pg.id";
        $sql = "SELECT clientes.client_rs, tm_pais.pais_nombre, DATE_FORMAT(fech_crea,'%d-%m-%Y') AS fech_crea FROM proyectos LEFT JOIN clientes ON proyectos.client_id=clientes.client_id LEFT JOIN tm_pais ON clientes.pais_id=tm_pais.pais_id WHERE proy_id=?";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($proy_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function get_proyecto_gestionado_para_cambiar_a_abier($proy_id, $id_proyecto_cantidad_servicios)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT proyecto_gestionado.id, proyecto_gestionado.proy_id, 
        proyecto_gestionado.estados_id, proyecto_gestionado.id_proyecto_cantidad_servicios, 
        proyecto_gestionado.recurrencia, proyecto_gestionado.estados_id FROM proyecto_gestionado 
        WHERE proy_id=? AND proyecto_gestionado.id_proyecto_cantidad_servicios=?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($proy_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(2, htmlspecialchars($id_proyecto_cantidad_servicios, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update_estado_proy($id_proyecto_cantidad_servicios, $estados_id)
    {
        $conn = parent::get_conexion();
        $sql = "UPDATE proyecto_gestionado SET estados_id=:estados_id WHERE id_proyecto_cantidad_servicios=:id_proyecto_cantidad_servicios AND est=1";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id_proyecto_cantidad_servicios', $id_proyecto_cantidad_servicios, PDO::PARAM_INT);
        $stmt->bindValue(':estados_id', $estados_id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function eliminar_proy_x_id($proy_id, $id)
    {
        $conn = parent::get_conexion();
        $sql = "UPDATE proyecto_cantidad_servicios SET est=0 WHERE proy_id=? AND id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($proy_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(2, htmlspecialchars($id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
    }

    public function cambiar_a_abierto($id_proyecto_cantidad_servicios)
    {
        $conn = parent::get_conexion();
        $sql = "UPDATE proyecto_gestionado SET estados_id= 1 WHERE id_proyecto_cantidad_servicios=? AND est=1";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($id_proyecto_cantidad_servicios, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function eliminar_proy_x_numero_servicio_proy_gestionado($id)
    {
        $conn = parent::get_conexion();
        $sql = "DELETE FROM proyecto_gestionado WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function insert_proyecto(int $usu_id, int $client_id, int $cantidad_servicios)
    {
        $conn = parent::get_conexion();
        $sql = "INSERT INTO proyectos (usu_crea, client_id, cantidad_servicios, est) VALUES (?, ?, ?, 1)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $usu_id, PDO::PARAM_INT);
        $stmt->bindValue(2, $client_id, PDO::PARAM_INT);
        $stmt->bindValue(3, $cantidad_servicios, PDO::PARAM_INT);
        $stmt->execute();
        // Devuelvo el ID generado
        return $conn->lastInsertId();
    }

    public function proyecto_cantidad_servicios(int $proy_id, int $usu_id, $numero_servicio)
    {
        $conn = parent::get_conexion();
        $sql = "INSERT INTO proyecto_cantidad_servicios (proy_id, usu_crea,numero_servicio) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $proy_id, PDO::PARAM_INT);
        $stmt->bindValue(2, $usu_id, PDO::PARAM_INT);
        $stmt->bindValue(3, $numero_servicio, PDO::PARAM_INT);
        $stmt->execute();
    }
    public function insert_host(int $id_proyecto_cantidad_servicios, int $usu_crea, string $tipo, string $valor)
    {
        $conn = parent::get_conexion();
        $sql = "INSERT INTO hosts (id_proyecto_cantidad_servicios, usu_crea, tipo, host, fecha_carga, est) VALUES (?, ?, ?, ?, NOW(), 1)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $id_proyecto_cantidad_servicios, PDO::PARAM_INT);
        $stmt->bindValue(2, $usu_crea, PDO::PARAM_INT);
        $stmt->bindValue(3, $tipo);
        $stmt->bindValue(4, $valor);
        $stmt->execute();
    }

    public function insert_nuevos_host(int $id_proyecto_cantidad_servicios, int $usu_id, string $tipo, string $host)
    {
        $conn = parent::get_conexion();
        $sql = "INSERT INTO hosts (id_proyecto_cantidad_servicios,usu_crea, tipo, host, fecha_carga, est) VALUES (?, ?, ?, ?, NOW(), 1)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $id_proyecto_cantidad_servicios);
        $stmt->bindValue(2, $usu_id, PDO::PARAM_INT);
        $stmt->bindValue(3, $tipo);
        $stmt->bindValue(4, $host);
        $stmt->execute();
    }

    public function get_proyectos_nuevos_borrador()
    {
        $conn = parent::get_conexion();
        $sql = "SELECT 
    pcs.id AS id_proyecto_cantidad_servicios,
    pcs.proy_id, 
    pcs.numero_servicio, 
    DATE_FORMAT(pcs.fech_crea, '%d-%m-%Y') AS fech_crea, 
    p.cantidad_servicios, 
    c.client_rs, 
    u.usu_nom AS creador_proy,
    s.sector_nombre,
    tc.cat_nom,
    tp.pais_nombre,
    pg.id AS id_proyecto_gestionado,
    pr.posicion_recurrencia,
    pr.cantidad_total_recurrencias,
    (
        SELECT COUNT(*) 
        FROM proyecto_recurrencia prr 
        WHERE prr.id_proyecto_gestionado = pg.id
    ) AS recurrencias_total, 
    (
        SELECT COUNT(*) 
        FROM proyecto_recurrencia prr 
        WHERE prr.id_proyecto_gestionado = pg.id AND prr.est = 0
    ) AS recurrencias_inactivas,
    GROUP_CONCAT(tmu.usu_nom SEPARATOR ',<br>') AS usu_nom_asignado
FROM proyecto_cantidad_servicios pcs
JOIN proyectos p ON pcs.proy_id = p.proy_id
LEFT JOIN clientes c ON p.client_id = c.client_id
LEFT JOIN tm_pais tp ON c.pais_id = tp.pais_id
LEFT JOIN tm_usuario u ON p.usu_crea = u.usu_id
LEFT JOIN proyecto_gestionado pg ON pg.id_proyecto_cantidad_servicios = pcs.id
LEFT JOIN tm_usuario ug ON u.usu_id = ug.usu_id
LEFT JOIN tm_categoria tc ON pg.cat_id = tc.cat_id
LEFT JOIN sectores s ON pg.sector_id = s.sector_id
LEFT JOIN usuario_proyecto AS ua ON pg.id = ua.id_proyecto_gestionado
LEFT JOIN tm_usuario tmu ON ua.usu_asignado = tmu.usu_id
LEFT JOIN (
    SELECT 
        id AS id_proyecto_gestionado,
        id_proyecto_cantidad_servicios,
        ROW_NUMBER() OVER (PARTITION BY id_proyecto_cantidad_servicios ORDER BY id) AS posicion_recurrencia,
        COUNT(*) OVER (PARTITION BY id_proyecto_cantidad_servicios) AS cantidad_total_recurrencias
    FROM proyecto_gestionado
) AS pr ON pg.id = pr.id_proyecto_gestionado
WHERE pcs.est = 1 
  AND (pg.estados_id IS NULL OR pg.estados_id = 14)
GROUP BY 
    pcs.id,
    pcs.proy_id, 
    pcs.numero_servicio, 
    pcs.fech_crea, 
    p.cantidad_servicios, 
    c.client_rs, 
    u.usu_nom,
    s.sector_nombre,
    tc.cat_nom,
    tp.pais_nombre,
    pg.id,
    pr.posicion_recurrencia,
    pr.cantidad_total_recurrencias
ORDER BY pcs.proy_id ASC, pcs.numero_servicio ASC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update_proyecto_recurrencia($id)
    {
        $conn = parent::get_conexion();
        $sql = "UPDATE proyecto_recurrencia SET est=0 WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function get_proyectos_nuevos_x_sector($sector_id)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT 
        pcs.id AS id_proyecto_cantidad_servicios,
        pcs.proy_id, 
        pcs.numero_servicio, 
        DATE_FORMAT(pg.fech_inicio, '%d-%m-%Y') AS fech_inicio,
        DATE_FORMAT(pg.fech_fin, '%d-%m-%Y') AS fech_fin,
        p.cantidad_servicios, 
        c.client_rs, 
        u.usu_nom AS creador_proy,
        s.sector_nombre,
        s.sector_id,
        tc.cat_nom,
        tp.pais_nombre,
        pg.id,
        d.hs_dimensionadas,
        ua.usu_asignado
        FROM proyecto_cantidad_servicios pcs
        JOIN proyectos p ON pcs.proy_id = p.proy_id
        LEFT JOIN clientes c ON p.client_id = c.client_id
        LEFT JOIN tm_pais tp ON c.pais_id = tp.pais_id
        LEFT JOIN tm_usuario u ON p.usu_crea = u.usu_id
        LEFT JOIN proyecto_gestionado pg ON pg.id_proyecto_cantidad_servicios = pcs.id
        LEFT JOIN tm_usuario ug ON pg.usu_id = ug.usu_id
        LEFT JOIN tm_categoria tc ON pg.cat_id = tc.cat_id
        LEFT JOIN sectores s ON pg.sector_id = s.sector_id
        LEFT JOIN dimensionamiento d ON d.id_proyecto_gestionado = pg.id -- ✅ JOIN sin filtro restrictivo
        LEFT JOIN usuario_proyecto AS ua ON pg.id=ua.id_proyecto_gestionado
        WHERE s.sector_id = ? 
        AND pcs.est = 1 
        AND (pg.estados_id IS NULL OR pg.estados_id IN (1))
        ORDER BY pcs.proy_id ASC, pcs.numero_servicio ASC;";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($sector_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    // Inician servicios ETHICAL HACKING
    //VAS

    public function get_proyectos_eh($sector_id, $cat_id, $estados_id)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT 
    pcs.id AS id_proyecto_cantidad_servicios,
    pcs.proy_id, 
    pcs.numero_servicio, 
    DATE_FORMAT(pg.fech_inicio, '%d-%m-%Y') AS fech_inicio,
    DATE_FORMAT(pg.fech_fin, '%d-%m-%Y') AS fech_fin,
    p.cantidad_servicios, 
    c.client_rs, 
    u.usu_nom AS creador_proy,
    s.sector_nombre,
    s.sector_id,
    tsc.cats_nom,
    tp.pais_nombre,
    pg.id AS id_proyecto_gestionado,
    pg.cat_id,
    pg.estados_id,
    pg.titulo,
    prio.id AS prioridad,
    prio.prioridad AS prioridad_nom,
    GROUP_CONCAT(uas.usu_nom SEPARATOR ',<br>') AS usu_nom_asignado,
    GROUP_CONCAT(uas.usu_id SEPARATOR ',') AS usu_id_asignado,
    (
        SELECT SUM(d.hs_dimensionadas)
        FROM dimensionamiento d
        WHERE d.id_proyecto_gestionado = pg.id
    ) AS hs_dimensionadas,
    tmc.cat_nom AS categoria
FROM proyecto_cantidad_servicios pcs
JOIN proyectos p ON pcs.proy_id = p.proy_id
LEFT JOIN clientes c ON p.client_id = c.client_id
LEFT JOIN tm_pais tp ON c.pais_id = tp.pais_id
LEFT JOIN tm_usuario u ON p.usu_crea = u.usu_id
LEFT JOIN proyecto_gestionado pg ON pg.id_proyecto_cantidad_servicios = pcs.id
LEFT JOIN tm_usuario ug ON u.usu_id = ug.usu_id
LEFT JOIN sectores s ON pg.sector_id = s.sector_id
LEFT JOIN tm_subcategoria tsc ON pg.cats_id = tsc.cats_id
LEFT JOIN tm_categoria tmc ON pg.cat_id = tmc.cat_id
LEFT JOIN prioridad prio ON pg.prioridad_id = prio.id
LEFT JOIN usuario_proyecto AS ua ON pg.id = ua.id_proyecto_gestionado
LEFT JOIN tm_usuario uas ON ua.usu_asignado = uas.usu_id
WHERE s.sector_id = ?
  AND pcs.est = 1 
  AND pg.cat_id = ?
  AND pg.estados_id = ?
GROUP BY 
    pcs.id,
    pcs.proy_id, 
    pcs.numero_servicio, 
    pg.fech_inicio,
    pg.fech_fin,
    p.cantidad_servicios, 
    c.client_rs, 
    u.usu_nom,
    s.sector_nombre,
    s.sector_id,
    tsc.cats_nom,
    tp.pais_nombre,
    pg.id,
    pg.cat_id,
    pg.estados_id,
    pg.titulo,
    prio.id,
    prio.prioridad,
    tmc.cat_nom
ORDER BY id_proyecto_cantidad_servicios ASC";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($sector_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(2, htmlspecialchars($cat_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(3, htmlspecialchars($estados_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // FINALIZAN servicios ETHICAL HACKING
    //VAS

    //Inician INCIDENT RESPONSE
    public function get_proyectos_incident_response($sector_id, $estados_id, $cat_id)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT 
        pcs.id AS id_proyecto_cantidad_servicios,
        pcs.proy_id, 
        pcs.numero_servicio, 
        DATE_FORMAT(pg.fech_inicio, '%d-%m-%Y') AS fech_inicio,
        DATE_FORMAT(pg.fech_fin, '%d-%m-%Y') AS fech_fin,
        p.cantidad_servicios, 
        c.client_rs, 
        u.usu_nom AS creador_proy,
        s.sector_nombre,
        s.sector_id,
        tsc.cats_nom,
        tp.pais_nombre,
        pg.id AS id_proyecto_gestionado,
        pg.cat_id,
        pg.estados_id,
        pg.titulo,
        prio.id AS prioridad,
        prio.prioridad AS prioridad_nom,
        GROUP_CONCAT(uas.usu_nom SEPARATOR ',<br>') AS usu_nom_asignado,
        (
            SELECT SUM(d.hs_dimensionadas)
            FROM dimensionamiento d
            WHERE d.id_proyecto_gestionado = pg.id
        ) AS hs_dimensionadas,
        tmc.cat_nom AS categoria
    FROM proyecto_cantidad_servicios pcs
    JOIN proyectos p ON pcs.proy_id = p.proy_id
    LEFT JOIN clientes c ON p.client_id = c.client_id
    LEFT JOIN tm_pais tp ON c.pais_id = tp.pais_id
    LEFT JOIN tm_usuario u ON p.usu_crea = u.usu_id
    LEFT JOIN proyecto_gestionado pg ON pg.id_proyecto_cantidad_servicios = pcs.id
    LEFT JOIN tm_usuario ug ON u.usu_id = ug.usu_id
    LEFT JOIN sectores s ON pg.sector_id = s.sector_id
    LEFT JOIN tm_subcategoria tsc ON pg.cats_id = tsc.cats_id
    LEFT JOIN tm_categoria tmc ON pg.cat_id = tmc.cat_id
    LEFT JOIN prioridad prio ON pg.prioridad_id = prio.id
    LEFT JOIN usuario_proyecto AS ua ON pg.id = ua.id_proyecto_gestionado
    LEFT JOIN tm_usuario uas ON ua.usu_asignado = uas.usu_id
    WHERE pcs.est = 1 
      AND pg.estados_id = :estados_id
      AND (
            s.sector_id = :sector_id
            OR pg.cat_id = :cat_id
        )
      AND pg.cat_id = :cat_id
    GROUP BY 
        pcs.id,
        pcs.proy_id, 
        pcs.numero_servicio, 
        pg.fech_inicio,
        pg.fech_fin,
        p.cantidad_servicios, 
        c.client_rs, 
        u.usu_nom,
        s.sector_nombre,
        s.sector_id,
        tsc.cats_nom,
        tp.pais_nombre,
        pg.id,
        pg.cat_id,
        pg.estados_id,
        pg.titulo,
        prio.id,
        prio.prioridad,
        tmc.cat_nom
    ORDER BY id_proyecto_cantidad_servicios ASC";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':sector_id', $sector_id, PDO::PARAM_INT);
        $stmt->bindValue(':estados_id', $estados_id, PDO::PARAM_INT);
        $stmt->bindValue(':cat_id', $cat_id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Finaliza INCIDENT RESPONSE


    // INICIAN servicios SOC
    public function get_proyectos_sase($sector_id, $cat_id, $estados_id)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT 
    pcs.id AS id_proyecto_cantidad_servicios,
    pcs.proy_id, 
    pcs.numero_servicio, 
    DATE_FORMAT(pg.fech_inicio, '%d-%m-%Y') AS fech_inicio,
    DATE_FORMAT(pg.fech_fin, '%d-%m-%Y') AS fech_fin,
    p.cantidad_servicios, 
    c.client_rs, 
    u.usu_nom AS creador_proy,
    s.sector_nombre,
    s.sector_id,
    tsc.cats_nom,
    tp.pais_nombre,
    pg.id AS id_proyecto_gestionado,
    pg.cat_id,
    pg.estados_id,
    pg.titulo,
    prio.id AS prioridad,
    prio.prioridad AS prioridad_nom,
    GROUP_CONCAT(uas.usu_nom SEPARATOR ',<br>') AS usu_nom_asignado,
    (
        SELECT SUM(d.hs_dimensionadas)
        FROM dimensionamiento d
        WHERE d.id_proyecto_gestionado = pg.id
    ) AS hs_dimensionadas,
    tmc.cat_nom AS categoria
FROM proyecto_cantidad_servicios pcs
JOIN proyectos p ON pcs.proy_id = p.proy_id
LEFT JOIN clientes c ON p.client_id = c.client_id
LEFT JOIN tm_pais tp ON c.pais_id = tp.pais_id
LEFT JOIN tm_usuario u ON p.usu_crea = u.usu_id
LEFT JOIN proyecto_gestionado pg ON pg.id_proyecto_cantidad_servicios = pcs.id
LEFT JOIN tm_usuario ug ON u.usu_id = ug.usu_id
LEFT JOIN sectores s ON pg.sector_id = s.sector_id
LEFT JOIN tm_subcategoria tsc ON pg.cats_id = tsc.cats_id
LEFT JOIN tm_categoria tmc ON pg.cat_id = tmc.cat_id
LEFT JOIN prioridad prio ON pg.prioridad_id = prio.id
LEFT JOIN usuario_proyecto AS ua ON pg.id = ua.id_proyecto_gestionado
LEFT JOIN tm_usuario uas ON ua.usu_asignado = uas.usu_id
WHERE s.sector_id = ?
  AND pcs.est = 1 
  AND pg.cat_id = ?
  AND pg.estados_id = ?
GROUP BY 
    pcs.id,
    pcs.proy_id, 
    pcs.numero_servicio, 
    pg.fech_inicio,
    pg.fech_fin,
    p.cantidad_servicios, 
    c.client_rs, 
    u.usu_nom,
    s.sector_nombre,
    s.sector_id,
    tsc.cats_nom,
    tp.pais_nombre,
    pg.id,
    pg.cat_id,
    pg.estados_id,
    pg.titulo,
    prio.id,
    prio.prioridad,
    tmc.cat_nom
ORDER BY id_proyecto_cantidad_servicios ASC";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($sector_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(2, htmlspecialchars($cat_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(3, htmlspecialchars($estados_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //FINALIZA servicios SASE

    // INICIAN servicios SOC
    public function get_proyectos_soc($sector_id, $cat_id, $estados_id)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT 
    pcs.id AS id_proyecto_cantidad_servicios,
    pcs.proy_id, 
    pcs.numero_servicio, 
    DATE_FORMAT(pg.fech_inicio, '%d-%m-%Y') AS fech_inicio,
    DATE_FORMAT(pg.fech_fin, '%d-%m-%Y') AS fech_fin,
    p.cantidad_servicios, 
    c.client_rs, 
    u.usu_nom AS creador_proy,
    s.sector_nombre,
    s.sector_id,
    tsc.cats_nom,
    tp.pais_nombre,
    pg.id AS id_proyecto_gestionado,
    pg.cat_id,
    pg.estados_id,
    pg.titulo,
    prio.id AS prioridad,
    prio.prioridad AS prioridad_nom,
    GROUP_CONCAT(uas.usu_nom SEPARATOR ',<br>') AS usu_nom_asignado,
    (
        SELECT SUM(d.hs_dimensionadas)
        FROM dimensionamiento d
        WHERE d.id_proyecto_gestionado = pg.id
    ) AS hs_dimensionadas,
    tmc.cat_nom AS categoria
FROM proyecto_cantidad_servicios pcs
JOIN proyectos p ON pcs.proy_id = p.proy_id
LEFT JOIN clientes c ON p.client_id = c.client_id
LEFT JOIN tm_pais tp ON c.pais_id = tp.pais_id
LEFT JOIN tm_usuario u ON p.usu_crea = u.usu_id
LEFT JOIN proyecto_gestionado pg ON pg.id_proyecto_cantidad_servicios = pcs.id
LEFT JOIN tm_usuario ug ON u.usu_id = ug.usu_id
LEFT JOIN sectores s ON pg.sector_id = s.sector_id
LEFT JOIN tm_subcategoria tsc ON pg.cats_id = tsc.cats_id
LEFT JOIN tm_categoria tmc ON pg.cat_id = tmc.cat_id
LEFT JOIN prioridad prio ON pg.prioridad_id = prio.id
LEFT JOIN usuario_proyecto AS ua ON pg.id = ua.id_proyecto_gestionado
LEFT JOIN tm_usuario uas ON ua.usu_asignado = uas.usu_id
WHERE s.sector_id = ?
  AND pcs.est = 1 
  AND pg.cat_id = ?
  AND pg.estados_id = ?
GROUP BY 
    pcs.id,
    pcs.proy_id, 
    pcs.numero_servicio, 
    pg.fech_inicio,
    pg.fech_fin,
    p.cantidad_servicios, 
    c.client_rs, 
    u.usu_nom,
    s.sector_nombre,
    s.sector_id,
    tsc.cats_nom,
    tp.pais_nombre,
    pg.id,
    pg.cat_id,
    pg.estados_id,
    pg.titulo,
    prio.id,
    prio.prioridad,
    tmc.cat_nom
ORDER BY id_proyecto_cantidad_servicios ASC";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($sector_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(2, htmlspecialchars($cat_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(3, htmlspecialchars($estados_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //FINALIZAN servicios SOC

    public function get_usuarios_x_proy_y_sector(int $id_proyecto_cantidad_servicios)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT 
        tm_usuario.usu_nom, 
        usuario_proyecto.usu_asignado, 
        sectores.sector_nombre,
        sectores.sector_id,
        proyecto_gestionado.estados_id
        FROM usuario_proyecto 
        LEFT JOIN tm_usuario ON usuario_proyecto.usu_asignado = tm_usuario.usu_id 
        LEFT JOIN sectores ON tm_usuario.sector_id = sectores.sector_id
        LEFT JOIN proyecto_gestionado ON usuario_proyecto.id_proyecto_gestionado = proyecto_gestionado.id
        WHERE proyecto_gestionado.id = :id_proyecto_cantidad_servicios";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id_proyecto_cantidad_servicios', $id_proyecto_cantidad_servicios, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert_descripciones_proyecto_get_id(int $id_proyecto_cantidad_servicios, int $usu_crea, string $descripcion_proyecto, string $captura_imagen): array
    {
        $conn = parent::get_conexion();
        $carpeta_hash = uniqid(md5(rand()), true); // Hash único

        $sql = "INSERT INTO descripciones_proyecto 
        (id_proyecto_cantidad_servicios, usu_crea, descripcion_proyecto, captura_imagen, carpeta_documentos_proy)
        VALUES (:id_proy, :usu, :desc, :captura, :carpeta)";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id_proy', $id_proyecto_cantidad_servicios, PDO::PARAM_INT);
        $stmt->bindValue(':usu', $usu_crea, PDO::PARAM_INT);
        $stmt->bindValue(':desc', $descripcion_proyecto, PDO::PARAM_STR);
        $stmt->bindValue(':captura', $captura_imagen, PDO::PARAM_STR);
        $stmt->bindValue(':carpeta', $carpeta_hash, PDO::PARAM_STR);
        $stmt->execute();

        return [
            "id" => $conn->lastInsertId(),
            "hash" => $carpeta_hash
        ];
    }

    public function asociar_documentos_a_descripcion(int $id, string $documentos)
    {
        $conn = parent::get_conexion();
        $sql = "UPDATE descripciones_proyecto SET documento = :documentos WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':documentos', $documentos, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function finalizar_proyecto(int $estados_id, int $id_proyecto_cantidad_servicios)
    {
        $conn = parent::get_conexion();
        $sql = "UPDATE proyecto_gestionado SET estados_id=:estados_id WHERE id_proyecto_cantidad_servicios=:id_proyecto_cantidad_servicios";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':estados_id', $estados_id, PDO::PARAM_INT);
        $stmt->bindValue(':id_proyecto_cantidad_servicios', $id_proyecto_cantidad_servicios, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function finalizar_proyecto_tabla_estados_proyecto(int $id_proyecto_cantidad_servicios, int $usu_id, int $estados_id)
    {
        $conn = parent::get_conexion();
        $sql = "INSERT INTO estados_proyecto(id_proyecto_cantidad_servicios,usu_id,estados_id) VALUES (:id_proyecto_cantidad_servicios, :usu_id, :estados_id)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id_proyecto_cantidad_servicios', $id_proyecto_cantidad_servicios, PDO::PARAM_INT);
        $stmt->bindValue(':estados_id', $estados_id, PDO::PARAM_INT);
        $stmt->bindValue(':usu_id', $usu_id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function get_datos_usuario_finalizador_proyecto(int $id_proyecto_cantidad_servicios)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT 
        tm_usuario.usu_nom, 
        sectores.sector_nombre,
        estados_proyecto.fecha_cierre_proyecto
        FROM estados_proyecto 
        LEFT JOIN tm_usuario ON estados_proyecto.usu_id = tm_usuario.usu_id 
        LEFT JOIN sectores ON tm_usuario.sector_id = sectores.sector_id 
        WHERE estados_proyecto.id_proyecto_cantidad_servicios = :id_proyecto_cantidad_servicios ORDER BY estados_proyecto.fecha_cierre_proyecto DESC LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id_proyecto_cantidad_servicios', $id_proyecto_cantidad_servicios, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function get_descripciones_proyecto(int $id_proyecto_cantidad_servicios)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT descripciones_proyecto.id,descripciones_proyecto.carpeta_documentos_proy,descripciones_proyecto.documento,descripciones_proyecto.descripcion_proyecto,descripciones_proyecto.captura_imagen,descripciones_proyecto.usu_crea, descripciones_proyecto.fech_crea, tm_usuario.usu_nom, sectores.sector_nombre, proyecto_gestionado.estados_id FROM descripciones_proyecto LEFT JOIN tm_usuario ON descripciones_proyecto.usu_crea=tm_usuario.usu_id LEFT JOIN sectores ON tm_usuario.sector_id=sectores.sector_id LEFT JOIN proyecto_gestionado ON descripciones_proyecto.id_proyecto_cantidad_servicios=proyecto_gestionado.id_proyecto_cantidad_servicios WHERE proyecto_gestionado.id_proyecto_cantidad_servicios=:id_proyecto_cantidad_servicios";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id_proyecto_cantidad_servicios', $id_proyecto_cantidad_servicios, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete_descripciones_proyecto(int $id)
    {
        $conn = parent::get_conexion();
        $sql = "DELETE FROM descripciones_proyecto WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function get_proyectos_nuevos_vista_calidad($sector_id, $estados_id)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT 
    pcs.id AS id_proyecto_cantidad_servicios,
    pcs.proy_id, 
    pcs.numero_servicio, 
    DATE_FORMAT(pg.fech_inicio, '%d-%m-%Y') AS fech_inicio,
    DATE_FORMAT(pg.fech_fin, '%d-%m-%Y') AS fech_fin,
    p.cantidad_servicios, 
    c.client_rs, 
    u.usu_nom AS creador_proy,
    s.sector_nombre,
    s.sector_id,
    tsc.cats_nom,
    tp.pais_nombre,
    pg.id AS id_proyecto_gestionado,
    pg.cat_id,
    pg.estados_id,
    pg.titulo,
    prio.id AS prioridad,
    prio.prioridad AS prioridad_nom,
    GROUP_CONCAT(uas.usu_nom SEPARATOR ',<br>') AS usu_nom_asignado,
    (
        SELECT SUM(d.hs_dimensionadas)
        FROM dimensionamiento d
        WHERE d.id_proyecto_gestionado = pg.id
    ) AS hs_dimensionadas,
    tmc.cat_nom
FROM proyecto_cantidad_servicios pcs
JOIN proyectos p ON pcs.proy_id = p.proy_id
LEFT JOIN clientes c ON p.client_id = c.client_id
LEFT JOIN tm_pais tp ON c.pais_id = tp.pais_id
LEFT JOIN tm_usuario u ON p.usu_crea = u.usu_id
LEFT JOIN proyecto_gestionado pg ON pg.id_proyecto_cantidad_servicios = pcs.id
LEFT JOIN tm_usuario ug ON u.usu_id = ug.usu_id
LEFT JOIN sectores s ON pg.sector_id = s.sector_id
LEFT JOIN tm_subcategoria tsc ON pg.cats_id = tsc.cats_id
LEFT JOIN tm_categoria tmc ON pg.cat_id = tmc.cat_id
LEFT JOIN prioridad prio ON pg.prioridad_id = prio.id
LEFT JOIN usuario_proyecto AS ua ON pg.id = ua.id_proyecto_gestionado
LEFT JOIN tm_usuario uas ON ua.usu_asignado = uas.usu_id
WHERE s.sector_id = ?
  AND pcs.est = 1 
  AND pg.estados_id = ?
GROUP BY 
    pcs.id,
    pcs.proy_id, 
    pcs.numero_servicio, 
    pg.fech_inicio,
    pg.fech_fin,
    p.cantidad_servicios, 
    c.client_rs, 
    u.usu_nom,
    s.sector_nombre,
    s.sector_id,
    tsc.cats_nom,
    tp.pais_nombre,
    pg.id,
    pg.cat_id,
    pg.estados_id,
    pg.titulo,
    prio.id,
    prio.prioridad,
    tmc.cat_nom
ORDER BY id_proyecto_cantidad_servicios ASC";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($sector_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(2, htmlspecialchars($estados_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function get_proyectos_en_proceso_vista_calidad()
    {
        $conn = parent::get_conexion();
        $sql = "SELECT 
    pcs.id AS id_proyecto_cantidad_servicios,
    pcs.proy_id, 
    pcs.numero_servicio, 
    DATE_FORMAT(pg.fech_inicio, '%d-%m-%Y') AS fech_inicio,
    DATE_FORMAT(pg.fech_fin, '%d-%m-%Y') AS fech_fin,
    p.cantidad_servicios, 
    c.client_rs, 
    u.usu_nom AS creador_proy,
    s.sector_nombre,
    s.sector_id,
    tsc.cats_nom,
    tp.pais_nombre,
    pg.id AS id_proyecto_gestionado,
    pg.cat_id,
    pg.estados_id,
    IF(CHAR_LENGTH(pg.titulo) > 20, INSERT(pg.titulo, 21, 0, '<br>'), pg.titulo) AS titulo,
    prio.id AS prioridad,
    prio.prioridad AS prioridad_nom,
    GROUP_CONCAT(uas.usu_nom SEPARATOR ',<br>') AS usu_nom_asignado,
    (
        SELECT SUM(d.hs_dimensionadas)
        FROM dimensionamiento d
        WHERE d.id_proyecto_gestionado = pg.id
    ) AS hs_dimensionadas,
    tmc.cat_nom
FROM proyecto_cantidad_servicios pcs
JOIN proyectos p ON pcs.proy_id = p.proy_id
LEFT JOIN clientes c ON p.client_id = c.client_id
LEFT JOIN tm_pais tp ON c.pais_id = tp.pais_id
LEFT JOIN tm_usuario u ON p.usu_crea = u.usu_id
LEFT JOIN proyecto_gestionado pg ON pg.id_proyecto_cantidad_servicios = pcs.id
LEFT JOIN tm_usuario ug ON u.usu_id = ug.usu_id
LEFT JOIN sectores s ON pg.sector_id = s.sector_id
LEFT JOIN tm_subcategoria tsc ON pg.cats_id = tsc.cats_id
LEFT JOIN tm_categoria tmc ON pg.cat_id = tmc.cat_id
LEFT JOIN prioridad prio ON pg.prioridad_id = prio.id
LEFT JOIN usuario_proyecto AS ua ON pg.id = ua.id_proyecto_gestionado
LEFT JOIN tm_usuario uas ON ua.usu_asignado = uas.usu_id
WHERE pcs.est = 1 
  AND pg.estados_id = 1 OR pg.estados_id = 2
GROUP BY 
    pcs.id,
    pcs.proy_id, 
    pcs.numero_servicio, 
    pg.fech_inicio,
    pg.fech_fin,
    p.cantidad_servicios, 
    c.client_rs, 
    u.usu_nom,
    s.sector_nombre,
    s.sector_id,
    tsc.cats_nom,
    tp.pais_nombre,
    pg.id,
    pg.cat_id,
    pg.estados_id,
    pg.titulo,
    prio.id,
    prio.prioridad,
    tmc.cat_nom
ORDER BY id_proyecto_cantidad_servicios ASC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function get_proyectos_($estados_id)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT 
    pcs.id AS id_proyecto_cantidad_servicios,
    pcs.proy_id, 
    pcs.numero_servicio, 
    DATE_FORMAT(pg.fech_inicio, '%d-%m-%Y') AS fech_inicio,
    DATE_FORMAT(pg.fech_fin, '%d-%m-%Y') AS fech_fin,
    p.cantidad_servicios, 
    c.client_rs, 
    u.usu_nom AS creador_proy,
    s.sector_nombre,
    s.sector_id,
    tsc.cats_nom,
    tp.pais_nombre,
    pg.id AS id_proyecto_gestionado,
    pg.cat_id,
    pg.estados_id,
    pg.titulo,
    prio.id AS prioridad,
    prio.prioridad AS prioridad_nom,
    GROUP_CONCAT(uas.usu_nom SEPARATOR ',<br>') AS usu_nom_asignado,
    (
        SELECT SUM(d.hs_dimensionadas)
        FROM dimensionamiento d
        WHERE d.id_proyecto_gestionado = pg.id
    ) AS hs_dimensionadas,
    tmc.cat_nom
FROM proyecto_cantidad_servicios pcs
JOIN proyectos p ON pcs.proy_id = p.proy_id
LEFT JOIN clientes c ON p.client_id = c.client_id
LEFT JOIN tm_pais tp ON c.pais_id = tp.pais_id
LEFT JOIN tm_usuario u ON p.usu_crea = u.usu_id
LEFT JOIN proyecto_gestionado pg ON pg.id_proyecto_cantidad_servicios = pcs.id
LEFT JOIN tm_usuario ug ON u.usu_id = ug.usu_id
LEFT JOIN sectores s ON pg.sector_id = s.sector_id
LEFT JOIN tm_subcategoria tsc ON pg.cats_id = tsc.cats_id
LEFT JOIN tm_categoria tmc ON pg.cat_id = tmc.cat_id
LEFT JOIN prioridad prio ON pg.prioridad_id = prio.id
LEFT JOIN usuario_proyecto AS ua ON pg.id = ua.id_proyecto_gestionado
LEFT JOIN tm_usuario uas ON ua.usu_asignado = uas.usu_id
WHERE pcs.est = 1 
  AND pg.estados_id = ?
GROUP BY 
    pcs.id,
    pcs.proy_id, 
    pcs.numero_servicio, 
    pg.fech_inicio,
    pg.fech_fin,
    p.cantidad_servicios, 
    c.client_rs, 
    u.usu_nom,
    s.sector_nombre,
    s.sector_id,
    tsc.cats_nom,
    tp.pais_nombre,
    pg.id,
    pg.cat_id,
    pg.estados_id,
    pg.titulo,
    prio.id,
    prio.prioridad,
    tmc.cat_nom
ORDER BY id_proyecto_cantidad_servicios ASC";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($estados_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function get_proyectos_realizados_vista_calidad($estados_id)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT 
    pcs.id AS id_proyecto_cantidad_servicios,
    pcs.proy_id, 
    pcs.numero_servicio, 
    DATE_FORMAT(pg.fech_inicio, '%d-%m-%Y') AS fech_inicio,
    DATE_FORMAT(pg.fech_fin, '%d-%m-%Y') AS fech_fin,
    p.cantidad_servicios, 
    c.client_rs, 
    u.usu_nom AS creador_proy,
    s.sector_nombre,
    s.sector_id,
    tsc.cats_nom,
    tp.pais_nombre,
    pg.id AS id_proyecto_gestionado,
    pg.cat_id,
    pg.estados_id,
    pg.titulo,
    prio.id AS prioridad,
    prio.prioridad AS prioridad_nom,
    GROUP_CONCAT(uas.usu_nom SEPARATOR ',<br>') AS usu_nom_asignado,
    (
        SELECT SUM(d.hs_dimensionadas)
        FROM dimensionamiento d
        WHERE d.id_proyecto_gestionado = pg.id
    ) AS hs_dimensionadas,
    tmc.cat_nom
FROM proyecto_cantidad_servicios pcs
JOIN proyectos p ON pcs.proy_id = p.proy_id
LEFT JOIN clientes c ON p.client_id = c.client_id
LEFT JOIN tm_pais tp ON c.pais_id = tp.pais_id
LEFT JOIN tm_usuario u ON p.usu_crea = u.usu_id
LEFT JOIN proyecto_gestionado pg ON pg.id_proyecto_cantidad_servicios = pcs.id
LEFT JOIN tm_usuario ug ON u.usu_id = ug.usu_id
LEFT JOIN sectores s ON pg.sector_id = s.sector_id
LEFT JOIN tm_subcategoria tsc ON pg.cats_id = tsc.cats_id
LEFT JOIN tm_categoria tmc ON pg.cat_id = tmc.cat_id
LEFT JOIN prioridad prio ON pg.prioridad_id = prio.id
LEFT JOIN usuario_proyecto AS ua ON pg.id = ua.id_proyecto_gestionado
LEFT JOIN tm_usuario uas ON ua.usu_asignado = uas.usu_id
WHERE pcs.est = 1 
  AND pg.estados_id = ?
GROUP BY 
    pcs.id,
    pcs.proy_id, 
    pcs.numero_servicio, 
    pg.fech_inicio,
    pg.fech_fin,
    p.cantidad_servicios, 
    c.client_rs, 
    u.usu_nom,
    s.sector_nombre,
    s.sector_id,
    tsc.cats_nom,
    tp.pais_nombre,
    pg.id,
    pg.cat_id,
    pg.estados_id,
    pg.titulo,
    prio.id,
    prio.prioridad,
    tmc.cat_nom
ORDER BY id_proyecto_cantidad_servicios ASC";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($estados_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert_proyecto_gestionado(int $id_proyecto_cantidad_servicios, int $cat_id, int $cats_id, int $sector_id, int $usu_crea, string $prioridad_id, int $estados_id, string $titulo, string $descripcion, string $refProy, string $recurrencia, string $fech_inicio, string $fech_fin, string $fech_vantive, $archivo, $captura_imagen)
    {
        $conn = parent::get_conexion();
        $sql = "INSERT INTO proyecto_gestionado (
            id_proyecto_cantidad_servicios,
            cat_id,
            cats_id,
            sector_id,
            usu_crea,
            prioridad_id,
            estados_id,
            titulo,
            descripcion,
            refProy,
            recurrencia,
            fech_inicio,
            fech_fin,
            fech_vantive,
            archivo,
            captura_imagen,
            est
        ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($id_proyecto_cantidad_servicios, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(2, htmlspecialchars($cat_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(3, htmlspecialchars($cats_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(4, htmlspecialchars($sector_id, ENT_QUOTES), PDO::PARAM_INT);
        // $stmt->bindValue(5, htmlspecialchars($usu_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(5, htmlspecialchars($usu_crea, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(6, htmlspecialchars($prioridad_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(7, htmlspecialchars($estados_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(8, htmlspecialchars($titulo, ENT_QUOTES), PDO::PARAM_STR);
        $stmt->bindValue(9, htmlspecialchars($descripcion, ENT_QUOTES), PDO::PARAM_STR);
        $stmt->bindValue(10, htmlspecialchars($refProy, ENT_QUOTES), PDO::PARAM_STR); // corregido
        $stmt->bindValue(11, htmlspecialchars($recurrencia, ENT_QUOTES), PDO::PARAM_STR);

        $stmt->bindValue(12, $fech_inicio, is_null($fech_inicio) ? PDO::PARAM_NULL : PDO::PARAM_STR);
        $stmt->bindValue(13, $fech_fin, is_null($fech_fin) ? PDO::PARAM_NULL : PDO::PARAM_STR);
        $stmt->bindValue(14, $fech_vantive, is_null($fech_vantive) ? PDO::PARAM_NULL : PDO::PARAM_STR);

        $stmt->bindValue(15, $archivo, PDO::PARAM_STR);
        $stmt->bindValue(16, $captura_imagen, PDO::PARAM_STR);
        $stmt->bindValue(17, 1, PDO::PARAM_INT); // est activo por defecto
        $stmt->execute();
        return $conn->lastInsertId();
    }

    public function insert_proyecto_pm(int $id_proyecto_gestionado, $usu_crea, $estados_id)
    {
        $conn = parent::get_conexion();
        $sql = "INSERT INTO pm_calidad (id_proyecto_gestionado,usu_crea,estados_id) VALUES (:id_proyecto_gestionado,:usu_crea,:estados_id)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id_proyecto_gestionado', $id_proyecto_gestionado, PDO::PARAM_INT);
        $stmt->bindValue(':usu_crea', $usu_crea, PDO::PARAM_INT);
        $stmt->bindValue(':estados_id', $estados_id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function insert_proyecto_recurrencia(int $id_proyecto_gestionado, int $cat_id)
    {
        $conn = parent::get_conexion();
        $sql = "INSERT INTO proyecto_recurrencia (id_proyecto_gestionado,cat_id) VALUES (:id_proyecto_gestionado,:cat_id)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id_proyecto_gestionado', $id_proyecto_gestionado, PDO::PARAM_INT);
        $stmt->bindValue(':cat_id', $cat_id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function insert_usuarios_proyecto(int $id_proyecto_gestionado, $usu_asignado)
    {
        $conn = parent::get_conexion();
        $sql = "INSERT INTO usuario_proyecto (id_proyecto_gestionado,usu_asignado) VALUES (:id_proyecto_gestionado, :usu_asignado)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id_proyecto_gestionado', $id_proyecto_gestionado, PDO::PARAM_INT);
        $stmt->bindValue(':usu_asignado', $usu_asignado);
        $stmt->execute();
    }


    public function insert_dimensionamiento(int $id_proyecto_gestionado, string $hs_dimensionadas, int $usu_crea)
    {
        $conn = parent::get_conexion();
        $sql = "INSERT INTO dimensionamiento (id_proyecto_gestionado, hs_dimensionadas, usu_crea) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($id_proyecto_gestionado, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(2, htmlspecialchars($hs_dimensionadas, ENT_QUOTES), PDO::PARAM_STR);
        $stmt->bindValue(3, htmlspecialchars($usu_crea, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
    }

    public function get_datos_proyecto_creado(int $id_proyecto_cantidad_servicios)
    {
        $conn = parent::get_conexion();
        // $sql = "SELECT proyecto_gestionado.*, dimensionamiento.hs_dimensionadas FROM proyecto_gestionado LEFT JOIN dimensionamiento ON proyecto_gestionado.id=dimensionamiento.id_proyecto_gestionado WHERE id_proyecto_cantidad_servicios=? AND proyecto_gestionado.est=1";
        $sql = "SELECT 
            pg.*, 
            d.hs_dimensionadas,
            pr_info.cantidad_recurrencias,
            (
                SELECT 
                    ROW_NUMBER() OVER (ORDER BY pr.id)
                FROM proyecto_recurrencia pr
                WHERE pr.id_proyecto_gestionado = pg.id
                LIMIT 1
            ) AS posicion_recurrencia
        FROM 
            proyecto_gestionado pg
        LEFT JOIN 
            dimensionamiento d ON pg.id = d.id_proyecto_gestionado
        LEFT JOIN (
            SELECT 
                id_proyecto_gestionado,
                COUNT(*) AS cantidad_recurrencias
            FROM 
                proyecto_recurrencia
            GROUP BY id_proyecto_gestionado
        ) AS pr_info ON pg.id = pr_info.id_proyecto_gestionado
        WHERE 
            pg.id_proyecto_cantidad_servicios = ?
            AND pg.est = 1";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($id_proyecto_cantidad_servicios, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function finalizar_proyecto_sin_implementar_proyecto_gestionado(int $id_proyecto_cantidad_servicios, int $estados_id)
    {
        $conn = parent::get_conexion();
        $sql = "UPDATE proyecto_gestionado SET estados_id=?, est=0 WHERE id_proyecto_cantidad_servicios=? AND est=1";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($estados_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(2, htmlspecialchars($id_proyecto_cantidad_servicios, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
    }

    public function update_proyecto(
        int $id_proyecto_cantidad_servicios,
        int $cat_id,
        int $cats_id,
        int $sector_id,
        int $usu_id,
        int $usu_crea,
        int $prioridad_id,
        string $titulo,
        string $descripcion,
        string $refProy,
        string $recurrencia,
        string $fech_inicio,
        string $fech_fin,
        string $fech_vantive
    ) {
        try {
            $conn = parent::get_conexion();
            $sql = "UPDATE proyecto_gestionado 
                    SET cat_id = :cat_id,
                        cats_id = :cats_id,
                        sector_id = :sector_id,
                        usu_crea = :usu_crea,
                        prioridad_id = :prioridad_id,
                        titulo = :titulo,
                        descripcion = :descripcion,
                        refProy = :refProy,
                        recurrencia = :recurrencia,
                        fech_inicio = :fech_inicio,
                        fech_fin = :fech_fin,
                        fech_vantive = :fech_vantive
                    WHERE id_proyecto_cantidad_servicios = :id_proyecto_cantidad_servicios
                      AND est = 1";

            $stmt = $conn->prepare($sql);

            $stmt->bindValue(':cat_id', $cat_id, PDO::PARAM_INT);
            $stmt->bindValue(':cats_id', $cats_id, PDO::PARAM_INT);
            $stmt->bindValue(':sector_id', $sector_id, PDO::PARAM_INT);
            $stmt->bindValue(':usu_crea', $usu_crea, PDO::PARAM_INT);
            $stmt->bindValue(':prioridad_id', $prioridad_id, PDO::PARAM_INT);
            $stmt->bindValue(':titulo', htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8'), PDO::PARAM_STR);
            $stmt->bindValue(':descripcion', htmlspecialchars($descripcion, ENT_QUOTES, 'UTF-8'), PDO::PARAM_STR);
            $stmt->bindValue(':refProy', htmlspecialchars($refProy, ENT_QUOTES, 'UTF-8'), PDO::PARAM_STR);
            $stmt->bindValue(':recurrencia', htmlspecialchars($recurrencia, ENT_QUOTES, 'UTF-8'), PDO::PARAM_STR);
            $stmt->bindValue(':fech_inicio', $fech_inicio, is_null($fech_inicio) ? PDO::PARAM_NULL : PDO::PARAM_STR);
            $stmt->bindValue(':fech_fin', $fech_fin, is_null($fech_fin) ? PDO::PARAM_NULL : PDO::PARAM_STR);
            $stmt->bindValue(':fech_vantive', $fech_vantive, is_null($fech_vantive) ? PDO::PARAM_NULL : PDO::PARAM_STR);
            $stmt->bindValue(':id_proyecto_cantidad_servicios', $id_proyecto_cantidad_servicios, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->rowCount(); // cantidad de filas actualizadas
        } catch (PDOException $e) {
            // Loguear el error si querés (por ejemplo usando error_log())
            error_log("Error en update_proyecto: " . $e->getMessage());
            return false; // podés devolver false si algo falla
        }
    }

    public function update_usuarios_asignados(int $id_proyecto_gestionado, array $usuarios_ids)
    {
        try {
            $conn = parent::get_conexion();

            // Eliminar todos los usuarios asignados actualmente
            $sqlDelete = "DELETE FROM usuario_proyecto WHERE id_proyecto_gestionado = :id";
            $stmtDelete = $conn->prepare($sqlDelete);
            $stmtDelete->bindValue(':id', $id_proyecto_gestionado, PDO::PARAM_INT);
            $stmtDelete->execute();

            // Insertar los nuevos usuarios asignados (si hay)
            if (!empty($usuarios_ids)) {
                $sqlInsert = "INSERT INTO usuario_proyecto (id_proyecto_gestionado, usu_asignado) VALUES (:id, :usu_id)";
                $stmtInsert = $conn->prepare($sqlInsert);
                foreach ($usuarios_ids as $usu_id) {
                    $stmtInsert->bindValue(':id', $id_proyecto_gestionado, PDO::PARAM_INT);
                    $stmtInsert->bindValue(':usu_id', $usu_id, PDO::PARAM_INT);
                    $stmtInsert->execute();
                }
            }

            return true;
        } catch (PDOException $e) {
            error_log("Error en update_usuarios_asignados: " . $e->getMessage());
            return false;
        }
    }



    public function update_hs_dimensionadas(int $id_proyecto_gestionado, string $hs_dimensionadas, int $usu_crea)
    {
        try {
            $conn = parent::get_conexion();

            error_log("Entrando a update_hs_dimensionadas()");
            error_log("ID: $id_proyecto_gestionado, HS: $hs_dimensionadas, USU: $usu_crea");

            $sql = "UPDATE dimensionamiento 
                    SET hs_dimensionadas = :hs_dimensionadas, usu_crea = :usu_crea 
                    WHERE id_proyecto_gestionado = :id_proyecto_gestionado";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':hs_dimensionadas', htmlspecialchars($hs_dimensionadas, ENT_QUOTES, 'UTF-8'), PDO::PARAM_STR);
            $stmt->bindValue(':usu_crea', $usu_crea, PDO::PARAM_INT);
            $stmt->bindValue(':id_proyecto_gestionado', $id_proyecto_gestionado, PDO::PARAM_INT);
            $stmt->execute();

            $rows = $stmt->rowCount();
            error_log("✅ Filas afectadas por update_hs_dimensionadas: $rows");

            return $rows;
        } catch (PDOException $e) {
            error_log("ERROR en update_hs_dimensionadas: " . $e->getMessage());
            return false;
        }
    }

    public function finalizar_proyecto_sin_implementar_proyecto_cantidad_servicios(int $id)
    {
        $conn = parent::get_conexion();
        $sql = "UPDATE proyecto_cantidad_servicios SET est=0 WHERE id=? AND est=1";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
    }
    public function get_combo_categorias_x_sector(int $sector_id)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT cat_id, cat_nom FROM tm_categoria WHERE sector_id = ? AND est = 1";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($sector_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function get_combo_subcategorias_x_sector(int $sector_id)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT * FROM tm_subcategoria WHERE sector_id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($sector_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_sectores()
    {
        $conn = parent::get_conexion();
        $sql = "SELECT sector_id, sector_nombre FROM sectores WHERE est=1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_combo_prioridad_proy_nuevo_eh()
    {
        $conn = parent::get_conexion();
        $sql = "SELECT * FROM prioridad";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_datos_proyecto_x_proy_id($proy_id, $id)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT clientes.client_rs, proyectos.refPro, proyectos.recurrencia 
        AS recurrencia_original, proyectos_contador_recurrencia.recurrencia, 
        tm_usuario.usu_nom, sectores.sector_nombre FROM proyectos 
        LEFT JOIN clientes ON proyectos.client_id=clientes.client_id 
        LEFT JOIN proyectos_contador_recurrencia 
        ON proyectos.proy_id=proyectos_contador_recurrencia.proy_id 
        LEFT JOIN tm_usuario ON proyectos.usu_crea=tm_usuario.usu_id 
        LEFT JOIN sectores ON tm_usuario.sector_id=sectores.sector_id 
        WHERE proyectos.proy_id=? 
        AND proyectos_contador_recurrencia.id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($proy_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(2, htmlspecialchars($id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function get_primer_recurrencia($proy_id)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT recurrencia FROM proyectos_contador_recurrencia WHERE proy_id=? ORDER BY id ASC LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($proy_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function get_data_proyecto_cantidad_servicios($id)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT * FROM proyecto_cantidad_servicios WHERE id=? AND est=1";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // public function get_nom_sector_x_id_recurrente($id)
    // {
    //     $conn = parent::get_conexion();
    //     $sql = "SELECT sectores.sector_nombre FROM proyectos_contador_recurrencia 
    //     INNER JOIN sectores ON proyectos_contador_recurrencia.sector_id=sectores.sector_id 
    //     WHERE id=?";
    //     $stmt = $conn->prepare($sql);
    //     $stmt->bindValue(1, htmlspecialchars($id, ENT_QUOTES), PDO::PARAM_INT);
    //     $stmt->execute();
    //     return $stmt->fetch(PDO::FETCH_ASSOC);
    // }

    public function inactivar_host_x_id($usu_crea, $id_proyecto_cantidad_servicios, $host_id)
    {
        $conn = parent::get_conexion();
        $sql = "UPDATE hosts SET est=0, usu_crea=? WHERE id_proyecto_cantidad_servicios=? AND host_id=? AND est=1";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($usu_crea, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(2, htmlspecialchars($id_proyecto_cantidad_servicios, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(3, htmlspecialchars($host_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
    }

    public function inactivar_todos_los_host_x_id_proyecto_cantidad_servicios($usu_crea, $id_proyecto_cantidad_servicios)
    {
        $conn = parent::get_conexion();
        $sql = "UPDATE hosts SET est=0, usu_crea=? WHERE id_proyecto_cantidad_servicios=?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($usu_crea, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(2, htmlspecialchars($id_proyecto_cantidad_servicios, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
    }

    public function activar_host_x_id($usu_crea, $id_proyecto_cantidad_servicios, $host_id)
    {
        $conn = parent::get_conexion();
        $sql = "UPDATE hosts SET est=1, usu_crea=? WHERE id_proyecto_cantidad_servicios=? AND host_id=? AND est=0";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($usu_crea, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(2, htmlspecialchars($id_proyecto_cantidad_servicios, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->bindValue(3, htmlspecialchars($host_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
    }


    public function get_host_proy_borrador($id_proyecto_cantidad_servicios)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT * FROM hosts WHERE id_proyecto_cantidad_servicios=?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($id_proyecto_cantidad_servicios, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_hosts_proy($id_proyecto_cantidad_servicios)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT tipo,host FROM hosts WHERE id_proyecto_cantidad_servicios=? AND est=1";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($id_proyecto_cantidad_servicios, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create_proyecto_a_nuevo(int $proy_id, int $sector_id, int $usu_crea, int $contador_id, int $prioridad_id, $documento, string $fecha_ini, string $fecha_fin)
    {
        $conn = parent::get_conexion();
        if ($documento == null) {
            $sql = "INSERT INTO proyecto_iniciado (proy_id, sector_id, usu_crea, contador_id, prioridad_id, documento, fecha_ini, fecha_fin, est)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, 1)";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $proy_id, PDO::PARAM_INT);
            $stmt->bindValue(2, $sector_id, PDO::PARAM_INT);
            $stmt->bindValue(3, $usu_crea, PDO::PARAM_INT);
            $stmt->bindValue(4, $contador_id, PDO::PARAM_INT);
            $stmt->bindValue(5, $prioridad_id, PDO::PARAM_INT);
            $stmt->bindValue(6, null); // Guardás solo la ruta relativa
            $stmt->bindValue(7, $fecha_ini);
            $stmt->bindValue(8, $fecha_fin);
            $stmt->execute();
        } else {
            $hash_doc = md5(uniqid(rand(), true));
            $extension = strtolower(pathinfo($documento['name'], PATHINFO_EXTENSION));
            $nombreArchivo = $hash_doc . '.' . $extension;

            $carpeta = __DIR__ . "/../../View/Home/Public/uploads";
            $rutaRelativa = $nombreArchivo;
            $rutaCompleta = $carpeta . '/' . $nombreArchivo;

            // Crear carpeta si no existe
            if (!file_exists($carpeta)) {
                mkdir($carpeta, 0777, true);
            }

            // Guardar archivo
            if (move_uploaded_file($documento['tmp_name'], $rutaCompleta)) {
                $sql = "INSERT INTO proyecto_iniciado (proy_id, sector_id, usu_crea, contador_id, prioridad_id, documento, fecha_ini, fecha_fin, est)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, 1)";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(1, $proy_id, PDO::PARAM_INT);
                $stmt->bindValue(2, $sector_id, PDO::PARAM_INT);
                $stmt->bindValue(3, $usu_crea, PDO::PARAM_INT);
                $stmt->bindValue(4, $contador_id, PDO::PARAM_INT);
                $stmt->bindValue(5, $prioridad_id, PDO::PARAM_INT);
                $stmt->bindValue(6, $rutaRelativa); // Guardás solo la ruta relativa
                $stmt->bindValue(7, $fecha_ini);
                $stmt->bindValue(8, $fecha_fin);
                $stmt->execute();
            } else {
                throw new Exception("No se pudo guardar el archivo");
            }
        }
    }

    public function get_sector_x_proy($id)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT sector_id FROM proyecto_gestionado WHERE id=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function get_usuarios_x_sector($sector_id)
    {
        $conn = parent::get_conexion();
        if ($sector_id == 5) {
            $sql = "SELECT tm_usuario.usu_id, tm_usuario.usu_correo, tm_usuario.usu_nom, sectores.sector_nombre FROM tm_usuario LEFT JOIN sectores ON tm_usuario.sector_id=sectores.sector_id WHERE sectores.sector_nombre IS NOT NULL AND tm_usuario.est=1";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $sql = "SELECT tm_usuario.usu_id, tm_usuario.usu_correo, tm_usuario.usu_nom, sectores.sector_nombre FROM tm_usuario LEFT JOIN sectores ON tm_usuario.sector_id=sectores.sector_id WHERE tm_usuario.sector_id=? AND sectores.sector_nombre IS NOT NULL AND tm_usuario.est=1 AND tm_usuario.est=1";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, htmlspecialchars($sector_id, ENT_QUOTES), PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function delete_proyecto_a_nuevo($proy_id)
    {
        $conn = parent::get_conexion();
        $sql = "DELETE FROM proyectos WHERE proy_id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($proy_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
    }

    public function delete_proyecto_a_nuevo_proyectos_contador_recurrencia($proy_id)
    {
        $conn = parent::get_conexion();
        $sql = "DELETE FROM proyectos_contador_recurrencia WHERE proy_id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, htmlspecialchars($proy_id, ENT_QUOTES), PDO::PARAM_INT);
        $stmt->execute();
    }

    function tomar_proyecto($usu_id, $id_proyecto_cantidad_servicios)
    {
        $conn = parent::get_conexion();
        $sql = "INSERT INTO usuario_proyecto (id_proyecto_gestionado, usu_asignado) 
            VALUES (:id_proyecto_gestionado, :usu_asignado)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id_proyecto_gestionado', $id_proyecto_cantidad_servicios, PDO::PARAM_INT);
        $stmt->bindValue(':usu_asignado', $usu_id, PDO::PARAM_INT);
        $stmt->execute();
    }


    public function get_datos_proyecto_gestionado($id_proyecto_cantidad_servicios)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT proyecto_gestionado.*, tm_categoria.cat_nom, tm_subcategoria.cats_nom FROM proyecto_gestionado LEFT JOIN tm_categoria ON proyecto_gestionado.cat_id=tm_categoria.cat_id LEFT JOIN tm_subcategoria ON proyecto_gestionado.cats_id=tm_subcategoria.cats_id WHERE id_proyecto_cantidad_servicios=:id_proyecto_cantidad_servicios AND proyecto_gestionado.est=1";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id_proyecto_cantidad_servicios', $id_proyecto_cantidad_servicios, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function grafico_get_total_servicios($sector_id)
    {
        $conn = parent::get_conexion();
        if ($sector_id == 4) {
            $sql = "SELECT cat_nom, COUNT(*) AS total FROM ( 
            -- Proyectos actuales 
            SELECT tc.cat_nom FROM proyecto_gestionado pg LEFT JOIN tm_categoria tc ON pg.cat_id = tc.cat_id WHERE pg.estados_id = 4 AND tc.est = 1 UNION ALL 
            -- Proyectos antiguos 
            SELECT tc.cat_nom FROM tm_ticket t LEFT JOIN tm_categoria tc ON t.cat_id = tc.cat_id WHERE t.estados_id = 4 AND tc.est = 1 ) AS sub GROUP BY cat_nom;";
            $stmt = $conn->prepare($sql);
        } else {
            $sql = "SELECT 
    cat_nom,
    COUNT(*) AS total
FROM (
    -- Proyectos actuales
    SELECT 
        tc.cat_nom
    FROM proyecto_gestionado pg
    LEFT JOIN tm_categoria tc ON pg.cat_id = tc.cat_id
    WHERE pg.estados_id = 4 
      AND (tc.sector_id = :sector_id OR tc.cat_id = 26)
    UNION ALL
    -- Proyectos antiguos
    SELECT 
        tc.cat_nom
    FROM tm_ticket t
    LEFT JOIN tm_categoria tc ON t.cat_id = tc.cat_id
    WHERE t.estados_id = 4 
      AND (tc.sector_id = :sector_id OR tc.cat_id = 26)
) AS sub
GROUP BY cat_nom";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':sector_id', $sector_id, PDO::PARAM_INT);
        }
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function grafico_get_total_servicios_por_sector()
    {
        $conn = parent::get_conexion();
        $sql = "SELECT 
    sector_nombre,
    COUNT(*) AS total
FROM (
    -- Proyectos actuales
    SELECT 
        s.sector_nombre
    FROM proyecto_gestionado pg
    LEFT JOIN sectores s ON pg.sector_id = s.sector_id
    WHERE pg.estados_id = 4
    UNION ALL
    -- Proyectos antiguos
    SELECT 
        s.sector_nombre
    FROM tm_ticket t
    LEFT JOIN sectores s ON t.sector = s.sector_id
    WHERE t.estados_id = 4
) AS sub
GROUP BY sector_nombre";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_proyectos_total()
    {
        $conn = parent::get_conexion();
        $sql = "SELECT 
    pcs.id AS id_proyecto_cantidad_servicios,
    pcs.proy_id, 
    pcs.numero_servicio, 
    DATE_FORMAT(pcs.fech_crea, '%d-%m-%Y') AS fech_crea, 
    p.cantidad_servicios, 
    c.client_rs, 
    u.usu_nom AS creador_proy,
    s.sector_nombre,
    tc.cat_nom,
    tp.pais_nombre,
    pg.id AS id_proyecto_gestionado,
    pg.id AS seguimiento_id,
    COUNT(DISTINCT tmu.usu_id) AS cantidad_usuarios_asignados,
    GROUP_CONCAT(tmu.usu_nom SEPARATOR ',<br>') AS usu_nom_asignado,
    pg.estados_id,
    est.estados_nombre, -- ✅ ahora correctamente traído de tm_estados
    pg.refProy,
    pg.titulo,
    1 AS origen
FROM proyecto_cantidad_servicios pcs
JOIN proyectos p ON pcs.proy_id = p.proy_id
LEFT JOIN clientes c ON p.client_id = c.client_id
LEFT JOIN tm_pais tp ON c.pais_id = tp.pais_id
LEFT JOIN tm_usuario u ON p.usu_crea = u.usu_id
LEFT JOIN proyecto_gestionado pg ON pg.id_proyecto_cantidad_servicios = pcs.id
LEFT JOIN tm_usuario ug ON u.usu_id = ug.usu_id
LEFT JOIN tm_categoria tc ON pg.cat_id = tc.cat_id
LEFT JOIN sectores s ON pg.sector_id = s.sector_id
LEFT JOIN usuario_proyecto AS ua ON pg.id = ua.id_proyecto_gestionado
LEFT JOIN tm_usuario tmu ON ua.usu_asignado = tmu.usu_id
LEFT JOIN tm_estados est ON pg.estados_id = est.estados_id -- ✅ corregido
WHERE pcs.est = 1 
GROUP BY 
    pcs.id,
    pcs.proy_id, 
    pcs.numero_servicio, 
    pcs.fech_crea, 
    p.cantidad_servicios, 
    c.client_rs, 
    u.usu_nom,
    s.sector_nombre,
    tc.cat_nom,
    tp.pais_nombre,
    pg.id,
    pg.estados_id,
    est.estados_nombre,
    pg.refProy,
    pg.titulo

UNION ALL

SELECT 
    NULL AS id_proyecto_cantidad_servicios,
    t.proy_id,
    1 AS numero_servicio,
    DATE_FORMAT(t.fech_crea, '%d-%m-%Y') AS fech_crea,
    1 AS cantidad_servicios,
    t.tick_titulo AS client_rs,
    u.usu_nom AS creador_proy,
    s.sector_nombre,
    tc.cat_nom,
    NULL AS pais_nombre,
    NULL AS id_proyecto_gestionado,
    'N/A' AS seguimiento_id,
    0 AS cantidad_usuarios_asignados,
    NULL AS usu_nom_asignado,
    NULL AS estados_id,
    t.tick_estado AS estados_nombre, -- ✅ directo desde tm_ticket
    NULL AS refProy,
    t.tick_titulo AS titulo,
    2 AS origen
FROM tm_ticket t
LEFT JOIN tm_usuario u ON t.usu_id = u.usu_id
LEFT JOIN tm_categoria tc ON t.cat_id = tc.cat_id
LEFT JOIN sectores s ON t.sector = s.sector_id
WHERE t.est = 1

ORDER BY origen ASC, proy_id ASC, numero_servicio ASC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_sectores_x_sector_id($sector_id)
    {
        $conn = parent::get_conexion();
        $join_pg_sector = $sector_id != 4 ? "AND (pg.sector_id = :sector_id_pg OR tc.cat_id = 26)" : "";
        $where_tc_sector = $sector_id != 4 ? "AND (tc.sector_id = :sector_id OR tc.cat_id = 26)" : "";
        $sql = "SELECT 
            tc.cat_id,
            tc.cat_nom,
            s.sector_id,
            COUNT(pg.id) AS total
        FROM tm_categoria tc
        LEFT JOIN sectores s ON tc.sector_id = s.sector_id
        LEFT JOIN proyecto_gestionado pg ON pg.cat_id = tc.cat_id 
            AND pg.estados_id = 1 
            $join_pg_sector
        WHERE tc.est = 1 
            $where_tc_sector
        GROUP BY tc.cat_id, tc.cat_nom, s.sector_id
        ORDER BY 
            CASE WHEN COUNT(pg.id) > 0 THEN 0 ELSE 1 END,
            COUNT(pg.id) DESC";
        $stmt = $conn->prepare($sql);
        if ($sector_id != 4) {
            $stmt->bindValue(':sector_id', $sector_id, PDO::PARAM_INT);
            $stmt->bindValue(':sector_id_pg', $sector_id, PDO::PARAM_INT);
        }
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_proyectos_nuevos_x_sector_inicio($sector_id)
    {
        $conn = parent::get_conexion();
        $sql = "SELECT COUNT(proyecto_gestionado.id) AS total, tm_categoria.cat_nom FROM proyecto_gestionado LEFT JOIN tm_categoria ON proyecto_gestionado.cat_id = tm_categoria.cat_id WHERE proyecto_gestionado.estados_id = 1 AND proyecto_gestionado.sector_id = :sector_id GROUP BY tm_categoria.cat_nom";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':sector_id', $sector_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function asignar_fecha_proyecto_finalizado_sin_fecha_fin($id_proyecto_cantidad_servicios, $fech_fin)
    {
        $conn = parent::get_conexion();
        $sql = "UPDATE proyecto_gestionado SET fech_fin=:fech_fin WHERE id_proyecto_cantidad_servicios=:id_proyecto_cantidad_servicios";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id_proyecto_cantidad_servicios', $id_proyecto_cantidad_servicios, PDO::PARAM_INT);
        $stmt->bindValue(':fech_fin', htmlspecialchars($fech_fin, ENT_QUOTES), PDO::PARAM_STR);
        $stmt->execute();

        // Agregamos respuesta
        echo json_encode([
            "Status" => $stmt->rowCount() > 0 ? "OK" : "ERROR",
            "rowsAffected" => $stmt->rowCount()
        ]);
    }
}
