$(document).ready(function () {
    tabla = $("#table_proyectos_nuevos_eh_servicios_profesionales").dataTable({
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
            url: "../../../../../../Controller/ctrProyectos.php?proy=get_proyectos_eh",
            type: "post",
            dataType: "json",
            data: {
                sector_id: 3, // eh
                cat_id: 34, //servicios_profesionales 
                estados_id: 1 //nuevos
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

    tabla = $("#table_proyectos_abiertos_eh_servicios_profesionales").dataTable({
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
            url: "../../../../../../Controller/ctrProyectos.php?proy=get_proyectos_eh",
            type: "post",
            dataType: "json",
            data: {
                sector_id: 3, // eh
                cat_id: 34, //servicios_profesionales 
                estados_id: 2 //abierto
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

    tabla = $("#table_proyectos_realizados_eh_servicios_profesionales").dataTable({
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
            url: "../../../../../../Controller/ctrProyectos.php?proy=get_proyectos_eh",
            type: "post",
            dataType: "json",
            data: {
                sector_id: 3, // eh
                cat_id: 34, //servicios_profesionales 
                estados_id: 3 //realizado
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

    tabla = $("#table_proyectos_cerrado_calidad_eh_servicios_profesionales").dataTable({
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
            url: "../../../../../../Controller/ctrProyectos.php?proy=get_proyectos_eh",
            type: "post",
            dataType: "json",
            data: {
                sector_id: 3, // eh
                cat_id: 34, //servicios_profesionales 
                estados_id: 4 //cerrados calidad
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

function cambiar_a_borrador(id_proyecto_cantidad_servicios) {
    Swal.fire({
        icon: "info",
        title: "Desea pasar el proyecto a Borrador?",
        showConfirmButton: true,
        showCancelButton: true
    }).then((result) => {
        if (result.isConfirmed) {
            $.post("../../../../../../Controller/ctrProyectos.php?proy=update_estado_proy", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios, estados_id: 14 },
                function (data, textStatus, jqXHR) {

                },
                "json"
            );

            setTimeout(() => {
                if ($.fn.DataTable.isDataTable('#table_proyectos_nuevos_eh_pentest')) {
                    $('#table_proyectos_nuevos_eh_pentest').DataTable().ajax.reload(null, false);
                }
                if ($.fn.DataTable.isDataTable('#table_proyectos_borrador')) {
                    $('#table_proyectos_borrador').DataTable().ajax.reload(null, false);
                }
                if ($.fn.DataTable.isDataTable('#table_proyectos_abiertos_eh_servicios_profesionales')) {
                    $('#table_proyectos_abiertos_eh_servicios_profesionales').DataTable().ajax.reload(null, false);
                }
                if ($.fn.DataTable.isDataTable('#table_proyectos_nuevos_eh_servicios_profesionales')) {
                    $('#table_proyectos_nuevos_eh_servicios_profesionales').DataTable().ajax.reload(null, false);
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

function cambiar_a_abierto(id_proyecto_cantidad_servicios) {
    Swal.fire({
        icon: "info",
        title: "Desea pasar el proyecto a Abierto?",
        showConfirmButton: true,
        showCancelButton: true
    }).then((result) => {
        if (result.isConfirmed) {
            $.post("../../../../../../Controller/ctrProyectos.php?proy=update_estado_proy", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios, estados_id: 2 },
                function (data, textStatus, jqXHR) {

                },
                "json"
            );

            setTimeout(() => {
                if ($.fn.DataTable.isDataTable('#table_proyectos_abiertos_eh_servicios_profesionales')) {
                    $('#table_proyectos_abiertos_eh_servicios_profesionales').DataTable().ajax.reload(null, false);
                }
                if ($.fn.DataTable.isDataTable('#table_proyectos_nuevos_eh_servicios_profesionales')) {
                    $('#table_proyectos_nuevos_eh_servicios_profesionales').DataTable().ajax.reload(null, false);
                }
            }, 500);

            Swal.fire({
                icon: "success",
                title: "Bien",
                text: "Proyecto pasado a Abierto!",
                timer: 1500,
                showConfirmButton: false
            });

        }
    })
}
function asignar_proyecto(id_proyecto_cantidad_servicios) {
    Swal.fire({
        icon: "info",
        title: "Desea tomar este proyecto?",
        showConfirmButton: true,
        showCancelButton: true
    }).then((result) => {
        if (result.isConfirmed) {
            $.post("../../../../../../Controller/ctrProyectos.php?proy=tomar_proyecto", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios },
                function (data, textStatus, jqXHR) {

                },
                "json"
            );
            Swal.fire({
                icon: "success",
                title: "Proyecto tomado correctamente",
                showConfirmButton: false,
                showCancelButton: false,
                timer: 1300
            });

            setTimeout(() => {
                if ($.fn.DataTable.isDataTable('#table_proyectos_nuevos_eh_servicios_profesionales')) {
                    $('#table_proyectos_nuevos_eh_servicios_profesionales').DataTable().ajax.reload(null, false);
                }
            }, 500);
        }
    })

}

// function asignar_proyecto(id_proyecto_cantidad_servicios) {
//     alert(id_proyecto_cantidad_servicios)
// }

function ver_hosts_eh(id_proyecto_cantidad_servicios) {
    $("#ModalVerHosts").modal("show");
    $.post("../../../../../../Controller/ctrProyectos.php?proy=get_hosts_proy_ip", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios },
        function (data, textStatus, jqXHR) {
            $("#cont_ip").html(data)
        },
        "html"
    );
    $.post("../../../../../../Controller/ctrProyectos.php?proy=get_hosts_proy_url", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios },
        function (data, textStatus, jqXHR) {
            $("#cont_url").html(data)
        },
        "html"
    );
    $.post("../../../../../../Controller/ctrProyectos.php?proy=get_hosts_proy_otro", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios },
        function (data, textStatus, jqXHR) {
            $("#cont_otro").html(data)
        },
        "html"
    );
}

function cambiar_a_nuevo(id_proyecto_cantidad_servicios) {
    Swal.fire({
        icon: "info",
        title: "Desea pasar el proyecto a Nuevo?",
        showConfirmButton: true,
        showCancelButton: true
    }).then((result) => {
        if (result.isConfirmed) {
            $.post("../../../../../../Controller/ctrProyectos.php?proy=update_estado_proy", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios, estados_id: 1 },
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

            setTimeout(() => {
                if ($.fn.DataTable.isDataTable('#table_proyectos_abiertos_eh_servicios_profesionales')) {
                    $('#table_proyectos_abiertos_eh_servicios_profesionales').DataTable().ajax.reload(null, false);
                }
                if ($.fn.DataTable.isDataTable('#table_proyectos_nuevos_eh_servicios_profesionales')) {
                    $('#table_proyectos_nuevos_eh_servicios_profesionales').DataTable().ajax.reload(null, false);
                }
            }, 500);
        }
    })
}

function cambiar_a_realizado(id_proyecto_cantidad_servicios) {
    Swal.fire({
        icon: "info",
        title: "Desea pasar el proyecto a Realizado?",
        showConfirmButton: true,
        showCancelButton: true
    }).then((result) => {
        if (result.isConfirmed) {
            $.post("../../../../../../Controller/ctrProyectos.php?proy=update_estado_proy", { id_proyecto_cantidad_servicios: id_proyecto_cantidad_servicios, estados_id: 3 },
                function (data, textStatus, jqXHR) {

                },
                "json"
            );
            Swal.fire({
                icon: "success",
                title: "Bien",
                text: "Proyecto pasado a Realizado!",
                timer: 1500,
                showConfirmButton: false
            });

            setTimeout(() => {
                if ($.fn.DataTable.isDataTable('#table_proyectos_abiertos_eh_servicios_profesionales')) {
                    $('#table_proyectos_abiertos_eh_servicios_profesionales').DataTable().ajax.reload(null, false);
                }
                if ($.fn.DataTable.isDataTable('#table_proyectos_realizados_eh_servicios_profesionales')) {
                    $('#table_proyectos_realizados_eh_servicios_profesionales').DataTable().ajax.reload(null, false);
                }
            }, 500);

        }
    })
}