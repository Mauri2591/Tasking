var tabla;
var URL = "http://127.0.0.1/Tasking";
//***************  Borradores  *****************************
$(document).ready(function () {

    tabla = $("#table_proyectos_borrador").dataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        "searching": true,
        lenghtChange: false,
        colReorder: true,
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        "ajax": {
            url: "../../../../../Controller/ctrProyectos.php?proy=get_proyectos_nuevos_borrador",
            type: "post",
            dataType: "json",
            data: {
                // usu_sector: 1
            },
            error: function (e) {
            }
        },
        "order": [[0, "asc"]], //Ordenar descendentemente
        "bDestroy": true,
        "responsive": true,
        "bInfo": true,
        "iDisplayLength": 7, //cantidad de tuplas o filas a mostrar
        "autoWith": false,
        "language": {
            "sProcessing": "Procesando..",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados..",
            "sEmptyTable": "Ninguna tarea disponible en esta tabla",
            "sInfo": "Mostrando un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando un total de 0 registros",
            "sInfoFiltered": "(Filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar: ",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Ùltimo",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ":Activar para ordenar la columna de manera ascendiente",
                "sSortDescending": ":Activar para ordenar la columna de manera descendiente"
            }
        }
    });

    tabla = $("#table_proyectos_total").dataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        "searching": true,
        lenghtChange: false,
        colReorder: true,
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        "ajax": {
            url: "../../../../../Controller/ctrProyectos.php?proy=get_proyectos_nuevos_borrador",
            type: "post",
            dataType: "json",
            data: {
                // usu_sector: 1
            },
            error: function (e) {
            }
        },
        "order": [[0, "asc"]], //Ordenar descendentemente
        "bDestroy": true,
        "responsive": true,
        "bInfo": true,
        "iDisplayLength": 7, //cantidad de tuplas o filas a mostrar
        "autoWith": false,
        "language": {
            "sProcessing": "Procesando..",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados..",
            "sEmptyTable": "Ninguna tarea disponible en esta tabla",
            "sInfo": "Mostrando un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando un total de 0 registros",
            "sInfoFiltered": "(Filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar: ",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Ùltimo",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ":Activar para ordenar la columna de manera ascendiente",
                "sSortDescending": ":Activar para ordenar la columna de manera descendiente"
            }
        }
    });

    tabla = $("#table_proyectos_total").dataTable({
        "aProcessing": true,
        "aServerSide": true,
        "ordering": true, // ✅ respetar el ORDER BY del SQL
        "lengthChange": false, // ✅ corregido el typo
        dom: 'Bfrtip',
        "searching": true,
        lenghtChange: false,
        colReorder: true,
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        "ajax": {
            url: "../../../../../Controller/ctrProyectos.php?proy=get_proyectos_total",
            type: "post",
            dataType: "json",
            data: {
                // usu_sector: 1
            },
            error: function (e) {
            }
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo": true,
        "iDisplayLength": 9, //cantidad de tuplas o filas a mostrar
        "autoWith": false,
        "language": {
            "sProcessing": "Procesando..",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados..",
            "sEmptyTable": "Ninguna tarea disponible en esta tabla",
            "sInfo": "Mostrando un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando un total de 0 registros",
            "sInfoFiltered": "(Filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar: ",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Ùltimo",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ":Activar para ordenar la columna de manera ascendiente",
                "sSortDescending": ":Activar para ordenar la columna de manera descendiente"
            }
        }
    });

    tabla = $("#table_proyectos_realizados").dataTable({
        "aProcessing": true,
        "aServerSide": true,
        "ordering": true, // ✅ respetar el ORDER BY del SQL
        "lengthChange": false, // ✅ corregido el typo
        dom: 'Bfrtip',
        "searching": true,
        lenghtChange: false,
        colReorder: true,
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        "ajax": {
            url: "../../../../../Controller/ctrProyectos.php?proy=get_proyectos_realizados_vista_calidad",
            type: "post",
            dataType: "json",
            data: {
                estados_id: 3
            },
            error: function (e) {
            }
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo": true,
        "iDisplayLength": 9, //cantidad de tuplas o filas a mostrar
        "autoWith": false,
        "language": {
            "sProcessing": "Procesando..",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados..",
            "sEmptyTable": "Ninguna tarea disponible en esta tabla",
            "sInfo": "Mostrando un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando un total de 0 registros",
            "sInfoFiltered": "(Filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar: ",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Ùltimo",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ":Activar para ordenar la columna de manera ascendiente",
                "sSortDescending": ":Activar para ordenar la columna de manera descendiente"
            }
        }
    });

    tabla = $("#table_proyectos_en_proceso").dataTable({
        "aProcessing": true,
        "aServerSide": true,
        "ordering": true, // ✅ respetar el ORDER BY del SQL
        "lengthChange": false, // ✅ corregido el typo
        dom: 'Bfrtip',
        "searching": true,
        lenghtChange: false,
        colReorder: true,
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        "ajax": {
            url: "../../../../../Controller/ctrProyectos.php?proy=get_proyectos_en_proceso_vista_calidad",
            type: "post",
            dataType: "json",
            data: {
            },
            error: function (e) {
            }
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo": true,
        "iDisplayLength": 9, //cantidad de tuplas o filas a mostrar
        "autoWith": false,
        "language": {
            "sProcessing": "Procesando..",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados..",
            "sEmptyTable": "Ninguna tarea disponible en esta tabla",
            "sInfo": "Mostrando un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando un total de 0 registros",
            "sInfoFiltered": "(Filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar: ",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Ùltimo",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ":Activar para ordenar la columna de manera ascendiente",
                "sSortDescending": ":Activar para ordenar la columna de manera descendiente"
            }
        }
    });
});


function validar_combo_prioridad(valorInicial) {
    const $combo = $("#combo_prioridad_proy_nuevo");

    const aplicarColor = (valor) => {
        valor = valor.toString();
        $combo.removeClass("border border-success border-warning border-danger");
        switch (valor) {
            case '1':
                $combo.addClass("border border-success");
                break;
            case '2':
                $combo.addClass("border border-warning");
                break;
            case '3':
                $combo.addClass("border border-danger");
                break;
            default:
                $combo.addClass("border border-success");
        }
    };
    aplicarColor(valorInicial);
    $combo.off("change").on("change", function () {
        aplicarColor(this.value);
    });
}

function gestionar_proy_borrador(proy_id, id_proyecto_cantidad_servicios, id) {
    document.getElementById("form_alta_proyecto").reset();
    $("#id_proyecto_gestionado").val(id)
    $("#ModalAltaProject").modal("show");
    $("#btn_crear_proyecto").show();
    $("#btn_cambiar_estado_proyecto").hide();
    $("#btn_eliminar_proyecto").show();
    $("#btn_finalizar_estado_proyecto").hide();
    $("#btn_cancelar_proyecto").hide();
    $("#btn_editar_proyecto").hide();

    $("#id_proyecto_cantidad_servicios").val(id_proyecto_cantidad_servicios);
    $("#proy_id").val(proy_id);

    function get_data_editar_proyecto() {
        let formData = new FormData();

        let checkboxes = document.querySelectorAll('#combo_usuario_x_sector input[name="usu_asignado[]"]:checked');
        checkboxes.forEach((check, index) => {
            formData.append('usu_asignado[]', check.value);
        })

        formData.append('id_proyecto_cantidad_servicios', id_proyecto_cantidad_servicios);
        formData.append('cat_id', document.getElementById("combo_categoria_proy_nuevo").value);
        formData.append('cats_id', document.getElementById("combo_subcategoria_proy_nuevo").value);
        formData.append('sector_id', document.getElementById("combo_sector_proy_nuevo").value);
        formData.append('usu_id', document.getElementById("combo_usuario_x_sector").value);
        formData.append('prioridad_id', document.getElementById("combo_prioridad_proy_nuevo").value);
        formData.append('titulo', document.getElementById("titulo_client_rs_alta_proy").value);
        formData.append('descripcion', document.getElementById("descripcion_proy").value);
        formData.append('refProy', document.getElementById("client_refPro_proy_nuevo").value);
        formData.append('recurrencia', document.getElementById("combo_recurrente_proy_nuevo").value);
        formData.append('fech_inicio', document.getElementById("fech_ini_proy_nuevo").value);
        formData.append('fech_fin', document.getElementById("fech_fin_proy_nuevo").value);
        formData.append('fech_vantive', document.getElementById("fech_vantive").value);
        formData.append('hs_dimensionadas', document.getElementById('hs_dimensionadas').value);
        formData.append('id_proyecto_gestionado', id);
        return formData;
    }
    $.post("../../../../../Controller/ctrProyectos.php?proy=get_client_y_pais_para_proy_borrador", { proy_id: proy_id },
        function (data) {
            const client_rs = data.client_rs;
            const fech_crea = data.fech_crea;
            const tituloDefault = `${client_rs}_${fech_crea}`;

            $("#client_rs_alta_proy").val(client_rs);
            $("#pais_id_carga_proy").val(data.pais_nombre);
            $("#titulo_client_rs_alta_proy").val(tituloDefault);

            $("#client_refPro_proy_nuevo").off("input").on("input", function () {
                const sufijo = this.value.trim();
                const nuevoTitulo = sufijo ? `${tituloDefault}_Ref-${sufijo}` : tituloDefault;
                $("#titulo_client_rs_alta_proy").val(nuevoTitulo);
            });
            $("#proy_cliente_periodo").text(data.titulo);
        },
        "json"
    );

    $.post("../../../../../Controller/ctrProyectos.php?proy=get_datos_proyecto_creado", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios },
        function (data, textStatus, jqXHR) {
            if (data != false) {
                $("#cont_activos").show();
                $("#cont_activos_ips_urls_otros").hide();
                $("#btn_crear_proyecto").hide();
                $("#btn_cambiar_estado_proyecto").show();
                $("#btn_eliminar_proyecto").show();
                $("#btn_finalizar_estado_proyecto").show();
                $("#btn_cancelar_proyecto").show();
                $("#btn_editar_proyecto").show();
                let img = `<img src="${URL + "/View/Home/Public/Uploads/Calidad/" + data.archivo}" width="100%" height="100%" alt="Imagen Proyecto argado">`;
                $("#titulo_client_rs_alta_proy").val(data.titulo);
                $("#descripcion_proy").val(data.descripcion);
                $("#client_refPro_proy_nuevo").val(data.refProy);
                $("#hs_dimensionadas").val(data.hs_dimensionadas)
                $("#client_refPro_proy_nuevo").trigger("input");
                $("#combo_recurrente_proy_nuevo").val(data.recurrencia);

                $.post("../../../../../Controller/ctrProyectos.php?proy=get_sectores", function (res) {
                    $("#combo_sector_proy_nuevo").html(res);
                    $("#combo_sector_proy_nuevo").val(data.sector_id);

                    $.post("../../../../../Controller/ctrProyectos.php?proy=get_combo_categorias_x_sector", { sector_id: data.sector_id }, function (res) {
                        $("#combo_categoria_proy_nuevo").html(res);
                        $("#combo_categoria_proy_nuevo").val(data.cat_id);
                    });

                    $.post("../../../../../Controller/ctrProyectos.php?proy=get_combo_subcategorias_x_sector", { sector_id: data.sector_id }, function (res) {
                        $("#combo_subcategoria_proy_nuevo").html(res);
                        $("#combo_subcategoria_proy_nuevo").val(data.cats_id);
                    });

                    $.post("../../../../../Controller/ctrProyectos.php?proy=get_usuarios_x_sector", {
                        sector_id: data.sector_id,
                        id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios
                    }, function (res) {
                        $("#combo_usuario_x_sector").html(res);
                    });



                    $.post("../../../../../Controller/ctrProyectos.php?proy=get_combo_prioridad_proy_nuevo_eh", function (res) {
                        $("#combo_prioridad_proy_nuevo").html(res);
                        $("#combo_prioridad_proy_nuevo").val(data.prioridad_id); // ahora sí lo encuentra
                        validar_combo_prioridad(data.prioridad_id);
                    });
                });

                $("#fech_ini_proy_nuevo").val(data.fech_inicio);
                $("#fech_fin_proy_nuevo").val(data.fech_fin);
                $("#fech_vantive").val(data.fech_vantive);

                $("#cont_img_proy_cargado").html(img)
                $("#cont_archivo").hide();

                $("#btn_cancelar_proyecto").off().click(function (e) {
                    e.preventDefault();
                    Swal.fire({
                        icon: "warning",
                        title: "¿Desea cancelar este proyecto?",
                        showCancelButton: true,
                        confirmButtonText: 'Si',
                        cancelButtonText: 'No'
                    }).then((resutl) => {
                        if (resutl.isConfirmed) {
                            $.post("../../../../../Controller/ctrProyectos.php?proy=finalizar_proyecto_sin_implementar_proyecto_gestionado", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios, estados_id: 17 },
                                function (data, textStatus, jqXHR) {
                                    console.log(textStatus);

                                },
                                "json"
                            );
                            $.post("../../../../../Controller/ctrProyectos.php?proy=inactivar_todos_los_host_x_id_proyecto_cantidad_servicios", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios },
                                function (data, textStatus, jqXHR) {

                                },
                                "json"
                            );
                            setTimeout(() => {
                                if ($.fn.DataTable.isDataTable('#table_proyectos_borrador')) {
                                    $('#table_proyectos_borrador').DataTable().ajax.reload(null, false);
                                }
                            }, 500);
                            Swal.fire({
                                icon: "success",
                                title: "Proyecto cancelado correctamente",
                                showCancelButton: false,
                                showConfirmButton: false,
                                timer: 1500
                            });
                            $("#ModalAltaProject").modal("hide");
                        }
                    });
                });

                $("#btn_finalizar_estado_proyecto").off().click(function (e) {
                    e.preventDefault();
                    Swal.fire({
                        icon: "warning",
                        title: "¿Finalizar proyecto sin implementar?",
                        showCancelButton: true,
                        confirmButtonText: 'Si',
                        cancelButtonText: 'No'
                    }).then((resutl) => {
                        if (resutl.isConfirmed) {
                            $.post("../../../../../Controller/ctrProyectos.php?proy=finalizar_proyecto_sin_implementar_proyecto_gestionado", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios, estados_id: 15 },
                                function (data, textStatus, jqXHR) {
                                    console.log(textStatus);

                                },
                                "json"
                            );
                            $.post("../../../../../Controller/ctrProyectos.php?proy=inactivar_todos_los_host_x_id_proyecto_cantidad_servicios", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios },
                                function (data, textStatus, jqXHR) {

                                },
                                "json"
                            );

                            setTimeout(() => {
                                if ($.fn.DataTable.isDataTable('#table_proyectos_borrador')) {
                                    $('#table_proyectos_borrador').DataTable().ajax.reload(null, false);
                                }
                            }, 500);

                            Swal.fire({
                                icon: "success",
                                title: "Proyecto finalizado sin implementar",
                                showCancelButton: false,
                                showConfirmButton: false,
                                timer: 1500
                            });
                            $("#ModalAltaProject").modal("hide");
                        }
                    });
                });

                $("#btn_cambiar_estado_proyecto").off().click(function (e) {
                    e.preventDefault();
                    $.post("../../../../../Controller/ctrProyectos.php?proy=cambiar_a_abierto", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios },
                        function (data, textStatus, jqXHR) {
                            Swal.fire({
                                icon: "success",
                                title: "Bien",
                                text: "Proyecto pasado a nuevo!",
                                showConfirmButton: false,
                                timer: 1500
                            });
                        },
                        "json"
                    );

                    setTimeout(() => {
                        if ($.fn.DataTable.isDataTable('#table_proyectos_borrador')) {
                            $('#table_proyectos_borrador').DataTable().ajax.reload(null, false);
                        }
                        if ($.fn.DataTable.isDataTable('#table_proyectos_nuevos_eh_vas')) {
                            $('#table_proyectos_nuevos_eh_vas').DataTable().ajax.reload(null, false);
                        }
                        if ($.fn.DataTable.isDataTable('#table_proyectos_en_proceso')) {
                            $('#table_proyectos_en_proceso').DataTable().ajax.reload(null, false);
                        }
                    }, 500);

                    Swal.fire({
                        icon: "success",
                        title: "Bien",
                        text: "Proyecto pasado a Nuevo!",
                        timer: 1500,
                        showConfirmButton: false
                    });
                    $("#ModalAltaProject").modal("hide");

                })

                $("#btn_eliminar_proyecto").off().click(function (e) {
                    e.preventDefault();
                    Swal.fire({
                        icon: "warning",
                        title: "¿Desea eliminar este proyecto?",
                        showCancelButton: true,
                        confirmButtonText: 'Si',
                        cancelButtonText: 'No'
                    }).then((resutl) => {
                        if (resutl.isConfirmed) {
                            $.post("../../../../../Controller/ctrProyectos.php?proy=finalizar_proyecto_sin_implementar_proyecto_gestionado", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios, estados_id: 16 },
                                function (data, textStatus, jqXHR) {
                                    console.log(textStatus);

                                },
                                "json"
                            );
                            $.post("../../../../../Controller/ctrProyectos.php?proy=finalizar_proyecto_sin_implementar_proyecto_cantidad_servicios", { id: id_proyecto_cantidad_servicios },
                                function (data, textStatus, jqXHR) {
                                    console.log(textStatus);

                                },
                                "json"
                            );
                            $.post("../../../../../Controller/ctrProyectos.php?proy=inactivar_todos_los_host_x_id_proyecto_cantidad_servicios", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios },
                                function (data, textStatus, jqXHR) {

                                },
                                "json"
                            );
                            Swal.fire({
                                icon: "success",
                                title: "Proyecto eliminado correctamente",
                                showCancelButton: false,
                                showConfirmButton: false,
                                timer: 1500
                            });

                            setTimeout(() => {
                                if ($.fn.DataTable.isDataTable('#table_proyectos_borrador')) {
                                    $('#table_proyectos_borrador').DataTable().ajax.reload(null, false);
                                }
                            }, 500);

                            $("#ModalAltaProject").modal("hide");
                        }
                    });
                });

                function get_data_editar_proyecto_dimensionamiento() {
                    let formData = new FormData();
                    formData.append('id_proyecto_gestionado', id);
                    formData.append('hs_dimensionadas', document.getElementById("hs_dimensionadas").value);
                    return formData;
                }
                $("#btn_editar_proyecto").off().click(function (e) {
                    e.preventDefault();
                    let data = get_data_editar_proyecto();

                    $.ajax({
                        type: "POST",
                        url: "../../../../../Controller/ctrProyectos.php?proy=update_proyecto",
                        data: data,
                        contentType: false,
                        processData: false,
                        dataType: "json",
                        success: function (response) {
                            console.log("proyecto completo actualizado", response);

                            if (response.status === "success") {
                                Swal.fire({
                                    icon: "success",
                                    title: "¡Bien!",
                                    text: "Proyecto actualizado correctamente",
                                    showCancelButton: false,
                                    showConfirmButton: false,
                                    timer: 1500
                                });

                                setTimeout(() => {
                                    if ($.fn.DataTable.isDataTable('#table_proyectos_borrador')) {
                                        $('#table_proyectos_borrador').DataTable().ajax.reload(null, false);
                                    }
                                }, 500);

                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Error",
                                    text: response.message || "Hubo un error al actualizar el proyecto",
                                    showConfirmButton: true
                                });
                            }
                        },
                        error: function (xhr) {
                            console.error("error al actualizar proyecto", xhr.responseText);
                            Swal.fire({
                                icon: "error",
                                title: "Error",
                                text: "No se pudo conectar al servidor",
                                showConfirmButton: true
                            });
                        }
                    });
                });
            } else {
                validar_combo_prioridad(1);
                $("#cont_activos").hide();
                $("#cont_activos_ips_urls_otros").show();
                $("#cont_archivo").show();
                $("#cont_descripcion_proy").show();

                $("#btn_eliminar_proyecto").off().click(function (e) {
                    e.preventDefault();
                    Swal.fire({
                        icon: "warning",
                        title: "¿Desea eliminar este proyecto?",
                        showCancelButton: true,
                        confirmButtonText: 'Si',
                        cancelButtonText: 'No'
                    }).then((resutl) => {
                        if (resutl.isConfirmed) {
                            $.post("../../../../../Controller/ctrProyectos.php?proy=finalizar_proyecto_sin_implementar_proyecto_gestionado", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios, estados_id: 16 },
                                function (data, textStatus, jqXHR) {
                                    console.log(textStatus);

                                },
                                "json"
                            );
                            $.post("../../../../../Controller/ctrProyectos.php?proy=finalizar_proyecto_sin_implementar_proyecto_cantidad_servicios", { id: id_proyecto_cantidad_servicios },
                                function (data, textStatus, jqXHR) {
                                    console.log(textStatus);

                                },
                                "json"
                            );
                            $.post("../../../../../Controller/ctrProyectos.php?proy=inactivar_todos_los_host_x_id_proyecto_cantidad_servicios", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios },
                                function (data, textStatus, jqXHR) {

                                },
                                "json"
                            );
                            Swal.fire({
                                icon: "success",
                                title: "Proyecto eliminado correctamente",
                                showCancelButton: false,
                                showConfirmButton: false,
                                timer: 1500
                            });

                            setTimeout(() => {
                                if ($.fn.DataTable.isDataTable('#table_proyectos_borrador')) {
                                    $('#table_proyectos_borrador').DataTable().ajax.reload(null, false);
                                }
                            }, 500);
                            $("#ModalAltaProject").modal("hide");
                        }
                    });
                });
            }
        },
        "json"
    );

    document.getElementById("client_refPro_proy_nuevo").focus();
    $.post("../../../../../Controller/ctrProyectos.php?proy=get_combo_categorias_x_sector", { sector_id: 1 },
        function (data, textStatus, jqXHR) {
            $("#combo_categoria_proy_nuevo").html(data)
        },
        "html"
    );

    $.post("../../../../../Controller/ctrProyectos.php?proy=get_combo_subcategorias_x_sector", { sector_id: 1 },
        function (data, textStatus, jqXHR) {
            $("#combo_subcategoria_proy_nuevo").html(data)
        },
        "html"
    );
    $.post("../../../../../Controller/ctrProyectos.php?proy=get_combo_prioridad_proy_nuevo_eh",
        function (data, textStatus, jqXHR) {
            $("#combo_prioridad_proy_nuevo").html(data)
        },
        "html"
    );

    $.post("../../../../../Controller/ctrProyectos.php?proy=get_sectores",
        function (data, textStatus, jqXHR) {
            $("#combo_sector_proy_nuevo").html(data)
        },
        "html"
    );

    $.post("../../../../../Controller/ctrProyectos.php?proy=get_usuarios_x_sector", { sector_id: 1 },
        function (data, textStatus, jqXHR) {
            $("#combo_usuario_x_sector").html(data)
        },
        "html"
    );

    document.getElementById("combo_sector_proy_nuevo").addEventListener("change", function () {
        $.post("../../../../../Controller/ctrProyectos.php?proy=get_combo_categorias_x_sector", { sector_id: this.value },
            function (data, textStatus, jqXHR) {
                $("#combo_categoria_proy_nuevo").html(data)
            },
            "html"
        );
        $.post("../../../../../Controller/ctrProyectos.php?proy=get_combo_subcategorias_x_sector", { sector_id: this.value },
            function (data, textStatus, jqXHR) {
                $("#combo_subcategoria_proy_nuevo").html(data)
            },
            "html"
        );

        $.post("../../../../../Controller/ctrProyectos.php?proy=get_usuarios_x_sector", { sector_id: this.value },
            function (data, textStatus, jqXHR) {
                $("#combo_usuario_x_sector").html(data)
            },
            "html"
        );
    });

    function data_hosts_nuevos() {
        let formData = new FormData();
        formData.append('id_proyecto_cantidad_servicios', document.getElementById("id_proyecto_cantidad_servicios").value);
        formData.append('tipo', document.getElementById('combo_select_activo').value);
        formData.append('host', document.getElementById('agregar_nuevo_host').value);
        return formData;
    }

    function ajax_insert_host_nuevos(data) {
        $.ajax({
            type: "POST",
            url: "../../../../../Controller/ctrProyectos.php?proy=insert_nuevos_host",
            data: data,
            dataType: "json",
            contentType: false,
            processData: false,
            success: function (response) {

            }
        });
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Activo agregado correctamente",
            showConfirmButton: false,
            timer: 1500
        });

        setTimeout(() => {
            if ($.fn.DataTable.isDataTable('#table_container_activos_proy_creado')) {
                $('#table_container_activos_proy_creado').DataTable().ajax.reload(null, false);
            }
        }, 500);

        $("#ModalAgregarActivos").modal("hide");
    }

    $("#btn_agregar_nuevos_hosts_borrador").off().on("click", function () {
        let data = data_hosts_nuevos();
        const campos = Array.from(data.entries());
        const hayVacios = campos.some(([key, val]) => val === '');
        if (hayVacios) {
            Swal.fire({
                icon: "warning",
                title: "Campos vacios!",
                showConfirmButton: true
            });
            return;
        }
        ajax_insert_host_nuevos(data);
    });

    //quede acá
    function get_datos_insert_proyecto_gestionado() {
        let formData = new FormData();
        let archivo = document.getElementById('archivo').files[0];

        let checkboxes = document.querySelectorAll('#combo_usuario_x_sector input[name="usu_asignado[]"]:checked');
        checkboxes.forEach((check, index) => {
            formData.append('usu_asignado[]', check.value);
        })

        formData.append('id_proyecto_cantidad_servicios', id_proyecto_cantidad_servicios);
        formData.append('cat_id', document.getElementById('combo_categoria_proy_nuevo').value);
        formData.append('cats_id', document.getElementById('combo_subcategoria_proy_nuevo').value);
        formData.append('usu_id', document.getElementById('combo_usuario_x_sector').value);
        formData.append('sector_id', document.getElementById('combo_sector_proy_nuevo').value);
        formData.append('prioridad_id', document.getElementById('combo_prioridad_proy_nuevo').value);
        formData.append('titulo', document.getElementById('titulo_client_rs_alta_proy').value);
        formData.append('descripcion', document.getElementById('descripcion_proy').value);
        formData.append('refProy', document.getElementById('client_refPro_proy_nuevo').value);
        formData.append('recurrencia', document.getElementById('combo_recurrente_proy_nuevo').value);
        formData.append('fech_inicio', document.getElementById('fech_ini_proy_nuevo').value);
        formData.append('fech_fin', document.getElementById('fech_fin_proy_nuevo').value);
        formData.append('fech_vantive', document.getElementById('fech_vantive').value);
        formData.append('archivo', archivo);
        formData.append('captura_imagen', document.getElementById('captura_imagen').value);
        formData.append('ips', document.getElementById("ips_proy_nuevo_eh").value);
        formData.append('urls', document.getElementById("urls_proy_nuevo_eh").value);
        formData.append('otros', document.getElementById("otros_proy_nuevo_eh").value);
        formData.append('hs_dimensionadas', document.getElementById('hs_dimensionadas').value);
        return formData;
    }

    function ajax_insert_proyecto_gestionado(data) {
        $.ajax({
            type: "POST",
            url: "../../../../../Controller/ctrProyectos.php?proy=insert_proyecto_gestionado",
            data: data,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function (response) {
                $("#cont_mje_proy_archivo").html("").hide();
                Swal.fire({
                    icon: "success",
                    title: "Bien",
                    text: "Proyecto agregado con exito",
                    showConfirmButton: false,
                    timer: 1500
                });
                setTimeout(() => {
                    Swal.fire({
                        icon: "info",
                        title: "Desea cambiarlo a estado Nuevo?",
                        showDenyButton: false,
                        showCancelButton: true,
                        confirmButtonText: "Si",
                        cancelButtonText: "No"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.post("../../../../../Controller/ctrProyectos.php?proy=cambiar_a_abierto", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios },
                                function (data, textStatus, jqXHR) {
                                    Swal.fire({
                                        icon: "success",
                                        title: "Bien",
                                        text: "Proyecto pasado a nuevo!",
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                },
                                "json"
                            );

                            setTimeout(() => {
                                if ($.fn.DataTable.isDataTable('#table_proyectos_borrador')) {
                                    $('#table_proyectos_borrador').DataTable().ajax.reload(null, false);
                                }
                                if ($.fn.DataTable.isDataTable('#table_proyectos_en_proceso')) {
                                    $('#table_proyectos_en_proceso').DataTable().ajax.reload(null, false);
                                }
                            }, 500);

                            Swal.fire({
                                icon: "success",
                                title: "Bien",
                                text: "Proyecto pasado a Nuevo!",
                                timer: 1500,
                                showConfirmButton: false
                            });
                            $("#ModalAltaProject").modal("hide");

                            setTimeout(() => {
                                if ($.fn.DataTable.isDataTable('#table_proyectos_borrador')) {
                                    $('#table_proyectos_borrador').DataTable().ajax.reload(null, false);
                                }
                            }, 500);
                        } else {
                            $("#ModalAltaProject").modal("hide");
                        }
                    });
                }, 1500);
                $("#btn_crear_proyecto").hide();
                $("#btn_cambiar_estado_proyecto").show();
                $("#btn_eliminar_proyecto").show();
                $("#btn_finalizar_estado_proyecto").show();
                $("#btn_editar_proyecto").show();

                setTimeout(() => {
                    if ($.fn.DataTable.isDataTable('#table_proyectos_borrador')) {
                        $('#table_proyectos_borrador').DataTable().ajax.reload(null, false);
                    }
                }, 500);
            },
            error: function (error) {
                let htmlmje = `<div id="extension_no_permitida" class="alert alert-warning text-center" role="alert">
                    <a class="alert-link">Error! <br></a>Extension no permitida
                </div>`;
                $("#cont_mje_proy_archivo").html(htmlmje).show();
                $("#archivo").val("");
                setTimeout(() => {
                    $("#cont_mje_proy_archivo").fadeOut();
                }, 1500);
            }

        });
    }

    function captura_imagen_b64() {
        document.getElementById("captura_imagen").addEventListener("paste", function (e) {
            let clipboardData = (e.clipboardData || window.clipboardData);
            // Buscar si hay items tipo imagen
            let items = clipboardData.items;
            let foundImage = false;

            for (let i = 0; i < items.length; i++) {
                if (items[i].type.indexOf("image") !== -1) {
                    let file = items[i].getAsFile();
                    let reader = new FileReader();
                    reader.onload = function (event) {
                        // Insertar base64 en el input
                        document.getElementById("captura_imagen").value = event.target.result;
                    };
                    reader.readAsDataURL(file);
                    foundImage = true;
                    break;
                }
            }
            if (!foundImage) {
                e.preventDefault();
                Swal.fire({
                    icon: 'warning',
                    title: "Error!",
                    text: "Solo se permiten imágenes en formato base64",
                    showConfirmButton: false,
                    showCancelButton: false,
                    timer: 1100
                });
            }
        });
    }
    captura_imagen_b64();

    $("#btn_crear_proyecto").off().click(function (e) {
        e.preventDefault();
        let data = get_datos_insert_proyecto_gestionado();
        if (data.get('hs_dimensionadas') == '') {
            Swal.fire({
                icon: "warning",
                title: "Error!",
                text: "Campo HS Dimensionadas vacio",
                showConfirmButton: true,
                showCancelButton: false
            });
            return;
        } else if (data.get('fech_inicio') == '' || data.get('fech_inicio') == null) {
            Swal.fire({
                icon: "warning",
                title: "Error!",
                text: "Debe seleccionar una fecha de inicio de proyecto",
                showConfirmButton: true,
                showCancelButton: false
            });
        }
        else {
            ajax_insert_proyecto_gestionado(data);
        }
    });

    //Comienza validacion de IPS en TEXTAREA
    document.getElementById("ips_proy_nuevo_eh").addEventListener("input", function () {
        const textarea = this;
        if (textarea.value.trim() === "") {
            document.getElementById("mje_ips_proy_nuevo_eh").innerHTML = "";
            return;
        }
        const todasLasIps = textarea.value
            .split(/[\s,]+/)
            .map(ip => ip.trim())
            .filter(ip => ip.length > 0);
        textarea.value = todasLasIps.join('\n');
        const ipsInvalidas = todasLasIps.filter(ip => !validarIP(ip));
        if (ipsInvalidas.length > 0) {
            mostrarMensajeIpInvalida(ipsInvalidas);
        } else {
            eliminarMensajeIpInvalida();
        }
    });
    function validarIP(ip) {
        const regexIP = /^(25[0-5]|2[0-4][0-9]|1?[0-9]{1,2})(\.(25[0-5]|2[0-4][0-9]|1?[0-9]{1,2})){3}$/;
        return regexIP.test(ip);
    }
    function mostrarMensajeIpInvalida(invalidas) {
        const contenedor = document.getElementById("mje_ips_proy_nuevo_eh");
        const lista = invalidas.map(ip => `<li>${ip}</li>`).join('');
        contenedor.innerHTML = `
        <div id="mje_validar_ips" class="alert alert-warning text-center" role="alert">
            <strong>¡Error!</strong> Las siguientes IPs no son válidas:
            <ul class="mb-0">${lista}</ul>
        </div>`;
    }
    function eliminarMensajeIpInvalida() {
        document.getElementById("mje_ips_proy_nuevo_eh").innerHTML = "";
    }
    //Finaliza validacion de IPS en TEXTAREA

    //Comienza validacion URLS en TEXTAREA
    document.getElementById("urls_proy_nuevo_eh").addEventListener("input", function () {
        const textarea = this;
        if (textarea.value.trim() === "") {
            document.getElementById("mje_urls_proy_nuevo_eh").innerHTML = "";
            return;
        }
        const todasLasUrls = textarea.value
            .split(/[\s,]+/)
            .map(url => url.trim())
            .filter(url => url.length > 0);
        textarea.value = todasLasUrls.join('\n');
        const urlsInvalidas = todasLasUrls.filter(url => !validarURL(url));
        if (urlsInvalidas.length > 0) {
            mostrarMensajeUrlInvalida(urlsInvalidas);
        } else {
            eliminarMensajeUrlInvalida();
        }
    });
    function validarURL(url) {
        return url.startsWith("http://") || url.startsWith("https://");
    }
    function mostrarMensajeUrlInvalida(invalidas) {
        const contenedor = document.getElementById("mje_urls_proy_nuevo_eh");
        const lista = invalidas.map(url => `<li>${url}</li>`).join('');
        contenedor.innerHTML = `
        <div id="mje_validar_urls" class="alert alert-warning text-center" role="alert">
            <strong>¡Error!</strong> Las siguientes URLs no comienzan con <code>http://</code> o <code>https://</code>:
            <ul class="mb-0">${lista}</ul>
        </div>`;
    }
    function eliminarMensajeUrlInvalida() {
        document.getElementById("mje_urls_proy_nuevo_eh").innerHTML = "";
    }
    //Finaliza validacion URLS en TEXTAREA
}


function consultar_activos_borrdor(proy_id, numero_proyecto) {
    $("#ModalConsultarActivos").modal("show")
    tabla = $("#table_container_activos_proy_creado").dataTable({
        "aProcessing": true,
        "aServerSide": true,
        "paging": false, // 👈 Esto elimina la paginación
        "searching": true,
        "lengthChange": false,
        "colReorder": true,
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        "ajax": {
            url: "../../../../../Controller/ctrProyectos.php?proy=get_host_proy_borrador",
            type: "post",
            dataType: "json",
            data: {
                id_proyecto_cantidad_servicios: $("#id_proyecto_cantidad_servicios").val()
            },
            error: function (e) {
                console.log(e.responseText);
            }
        },
        "order": [[0, "desc"]],
        "bDestroy": true,
        "responsive": true,
        "bInfo": true,
        "autoWidth": false,
        "language": {
            "sProcessing": "Procesando..",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados..",
            "sEmptyTable": "Ninguna tarea disponible en esta tabla",
            "sInfo": "",
            "sInfoEmpty": "",
            "sInfoFiltered": "(Filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar: ",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ":Activar para ordenar la columna de manera ascendiente",
                "sSortDescending": ":Activar para ordenar la columna de manera descendiente"
            }
        }
    });
}


function agregar_activos_borrdor() {
    let input_ip = `<input id="ips_agregar" class="form-control form-control-sm mt-2" type="text" placeholder="Ingrese la  ip">`;
    $("#container_input_host").html(input_ip)
    document.getElementById("agregar_activos_borrador").reset();
    $("#ModalAgregarActivos").modal("show");
}

function gestionar_numero_servicio(cantidad_servicios, proy_id) {
    $("#" + proy_id).text(cantidad_servicios);
    $("#valor_cantidad_servicios").val(cantidad_servicios);
}


function validarIP(ip) {
    const regexIP = /^(25[0-5]|2[0-4][0-9]|1?[0-9]{1,2})(\.(25[0-5]|2[0-4][0-9]|1?[0-9]{1,2})){3}$/;
    return regexIP.test(ip);
}

function validarURL(url) {
    return url.startsWith("http://") || url.startsWith("https://");
}

function mostrarMensajeInvalido(lista, tipo) {
    const contenedor = document.getElementById("mje_host_agregar");
    const items = lista.map(item => `<li>${item}</li>`).join('');
    const mensaje = tipo === "IP"
        ? `<strong>¡Error!</strong> Las siguientes IPs no son válidas:`
        : `<strong>¡Error!</strong> Las siguientes URLs no comienzan con <code>http://</code> o <code>https://</code>:`;

    contenedor.innerHTML = `
        <div class="alert alert-warning text-center" role="alert">
            ${mensaje}
            <ul class="mb-0">${items}</ul>
        </div>`;
}

function eliminarMensajeInvalido() {
    document.getElementById("mje_host_agregar").innerHTML = "";
}

// ✅ Evento de validación dinámica según opción seleccionada
document.getElementById("agregar_nuevo_host").addEventListener("input", function () {
    const tipo = document.getElementById("combo_select_activo").value;
    const texto = this.value.trim();

    if (texto === "") {
        eliminarMensajeInvalido();
        return;
    }

    const items = texto
        .split(/[\s,]+/)
        .map(t => t.trim())
        .filter(t => t.length > 0);

    this.value = items.join('\n');

    if (tipo === "IP") {
        const invalidas = items.filter(ip => !validarIP(ip));
        if (invalidas.length > 0) mostrarMensajeInvalido(invalidas, "IP");
        else eliminarMensajeInvalido();
    } else if (tipo === "URL") {
        const invalidas = items.filter(url => !validarURL(url));
        if (invalidas.length > 0) mostrarMensajeInvalido(invalidas, "URL");
        else eliminarMensajeInvalido();
    } else {
        eliminarMensajeInvalido(); // OTRO no se valida
    }
});

// Limpiar mensajes al cambiar de tipo
document.getElementById("combo_select_activo").addEventListener("change", function () {
    eliminarMensajeInvalido();
    document.getElementById("agregar_host").value = ""; // opcional: limpiar input al cambiar tipo
});

function ver_hosts_eh(id_proyecto_cantidad_servicios) {
    $("#ModalVerHosts").modal("show");
    $.post("../../../../../Controller/ctrProyectos.php?proy=get_hosts_proy_ip", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios },
        function (data, textStatus, jqXHR) {
            $("#cont_ip").html(data)
        },
        "html"
    );
    $.post("../../../../../Controller/ctrProyectos.php?proy=get_hosts_proy_url", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios },
        function (data, textStatus, jqXHR) {
            $("#cont_url").html(data)
        },
        "html"
    );
    $.post("../../../../../Controller/ctrProyectos.php?proy=get_hosts_proy_otro", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios },
        function (data, textStatus, jqXHR) {
            $("#cont_otro").html(data)
        },
        "html"
    );
}

function cambiar_a_borrador(id_proyecto_cantidad_servicios) {
    Swal.fire({
        icon: "info",
        title: "Desea pasar el proyecto a Borrador?",
        showConfirmButton: true,
        showCancelButton: true
    }).then((result) => {
        if (result.isConfirmed) {
            $.post("../../../../../Controller/ctrProyectos.php?proy=update_estado_proy", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios, estados_id: 14 },
                function (data, textStatus, jqXHR) {

                },
                "json"
            );

            setTimeout(() => {
                if ($.fn.DataTable.isDataTable('#table_proyectos_borrador')) {
                    $('#table_proyectos_borrador').DataTable().ajax.reload(null, false);
                }
            }, 500);
            // $('#table_proyectos_nuevos_eh_pentest').DataTable().ajax.reload(null, false);
            // $('#table_proyectos_borrador').DataTable().ajax.reload(null, false);
            // $('#table_proyectos_abiertos_eh_wireless').DataTable().ajax.reload(null, false);
            // $('#table_proyectos_nuevos_eh_wireless').DataTable().ajax.reload(null, false);
            // $('#table_proyectos_en_proceso').DataTable().ajax.reload(null, false);
            Swal.fire({
                icon: "success",
                title: "Bien",
                text: "Proyecto pasado a Nuevo!",
                timer: 1500,
                showConfirmButton: false
            });
        }
    })
}
function inactivar_host_borrador(id_proyecto_cantidad_servicios, host_id) {
    Swal.fire({
        title: '¿Estás seguro de dar de baja este host?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
    }).then((resul) => {
        if (resul.isConfirmed) {
            $.post("../../../../../Controller/ctrProyectos.php?proy=inactivar_host_x_id", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios, host_id: host_id },
                function (data, textStatus, jqXHR) {
                    Swal.fire({
                        title: 'Host dado de baja con éxito',
                        icon: 'success',
                        showCancelButton: false,
                        showConfirmButton: false,
                        timer: 1300
                    });
                },
                "json"
            );
            setTimeout(() => {
                if ($.fn.DataTable.isDataTable('#table_container_activos_proy_creado')) {
                    $('#table_container_activos_proy_creado').DataTable().ajax.reload(null, false);
                }
            }, 500);
        }
    });
}

function activar_host_borrador(id_proyecto_cantidad_servicios, host_id) {
    Swal.fire({
        title: '¿Activar host?',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
    }).then((resul) => {
        if (resul.isConfirmed) {
            $.post("../../../../../Controller/ctrProyectos.php?proy=activar_host_x_id", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios, host_id: host_id },
                function (data, textStatus, jqXHR) {
                    Swal.fire({
                        title: 'Host activado con exito',
                        icon: 'success',
                        showCancelButton: false,
                        showConfirmButton: false,
                        timer: 1300
                    });
                },
                "json"
            );
            setTimeout(() => {
                if ($.fn.DataTable.isDataTable('#table_container_activos_proy_creado')) {
                    $('#table_container_activos_proy_creado').DataTable().ajax.reload(null, false);
                }
            }, 500);
        }
    })
}
//***************  Borradores  *****************************
function cambiar_proy_a_borrador(id_proyecto_cantidad_servicios) {
    Swal.fire({
        icon: "info",
        title: "Desea pasar el proyecto a Borrador?",
        showConfirmButton: true,
        showCancelButton: true
    }).then((result) => {
        if (result.isConfirmed) {
            $.post("../../../../../Controller/ctrProyectos.php?proy=update_estado_proy", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios, estados_id: 14 },
                function (data, textStatus, jqXHR) {

                },
                "json"
            );
            Swal.fire({
                icon: "success",
                title: "Bien",
                text: "Proyecto pasado a Borrador!",
                timer: 1500,
                showConfirmButton: false
            });

            setTimeout(() => {
                if ($.fn.DataTable.isDataTable('#table_proyectos_borrador')) {
                    $('#table_proyectos_borrador').DataTable().ajax.reload(null, false);
                    $('#table_proyectos_realizados').DataTable().ajax.reload(null, false);
                    $('#table_proyectos_total').DataTable().ajax.reload(null, false);
                }

            }, 500);

        }
    })
}

function cerrar_proyecto(id_proyecto_cantidad_servicios) {
    Swal.fire({
        icon: "info",
        title: "Desea Cerrar el proyecto?",
        showConfirmButton: true,
        showCancelButton: true
    }).then((result) => {
        if (result.isConfirmed) {
            $.post("../../../../../Controller/ctrProyectos.php?proy=update_estado_proy", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios, estados_id: 4 },
                function (data, textStatus, jqXHR) {

                },
                "json"
            );
            setTimeout(() => {
                if ($.fn.DataTable.isDataTable('#table_proyectos_realizados')) {
                    $('#table_proyectos_realizados').DataTable().ajax.reload(null, false);
                    $('#table_proyectos_borrador').DataTable().ajax.reload(null, false);
                }
            }, 500);

            Swal.fire({
                icon: "success",
                title: "Bien",
                text: "Proyecto pasado a Nuevo!",
                timer: 1500,
                showConfirmButton: false
            });
        }
    })
}

//--------------------------------------------------------------------------------//





