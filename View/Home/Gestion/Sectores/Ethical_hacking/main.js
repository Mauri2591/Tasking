$(document).ready(function () {
    tabla = $("#table_proyectos_nuevos_eh").dataTable({
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
            url: "../../../../../Controller/ctrProyectos.php?proy=get_proyectos_nuevos_vista_calidad",
            type: "post",
            dataType: "json",
            data: {
                sector_id: 1,
                estados_id: 1
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


    tabla = $("#table_proyectos_abiertos_eh").dataTable({
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
            url: "../../../../../Controller/ctrProyectos.php?proy=get_proyectos_nuevos_vista_calidad",
            type: "post",
            dataType: "json",
            data: {
                sector_id: 1,
                estados_id: 2
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

    tabla = $("#table_proyectos_realizados_eh").dataTable({
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
            url: "../../../../../Controller/ctrProyectos.php?proy=get_proyectos_nuevos_vista_calidad",
            type: "post",
            dataType: "json",
            data: {
                sector_id: 1,
                estados_id: 3
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

    tabla = $("#table_proyectos_cerrados_calidad").dataTable({
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
            url: "../../../../../Controller/ctrProyectos.php?proy=get_proyectos_nuevos_vista_calidad",
            type: "post",
            dataType: "json",
            data: {
                sector_id: 1,
                estados_id: 4
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
});

function cambiar_proy_eh_desde_calidad_pentest(id_proyecto_cantidad_servicios) {
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
            $('#table_proyectos_nuevos_eh').DataTable().ajax.reload(null, false);
            $('#table_proyectos_borrador').DataTable().ajax.reload(null, false);
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

function cerrar_proyecto(id_proyecto_cantidad_servicios) {
    Swal.fire({
        icon: "info",
        title: "Desea cerrar el proyecto?",
        showConfirmButton: true,
        showCancelButton: true
    }).then((result) => {
        if (result.isConfirmed) {
            $.post("../../../../../Controller/ctrProyectos.php?proy=update_estado_proy", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios, estados_id: 4 },
                function (data, textStatus, jqXHR) {

                },
                "json"
            );
            Swal.fire({
                icon: "success",
                title: "Bien",
                text: "Proyecto pasado a Nuevo!",
                timer: 1500,
                showConfirmButton: false
            });
            $('#table_proyectos_realizados_eh').DataTable().ajax.reload(null, false);
            $('#table_proyectos_cerrados_calidad').DataTable().ajax.reload(null, false);
        }
    })
}

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
