<?php
require_once __DIR__ . "/../../../../../Config/Conexion.php";
require_once __DIR__ . "/../../../../../Config/Config.php";
if (isset($_SESSION['usu_id'])) {
    require_once __DIR__ . "/../../../../../Config/Config.php";
    require_once __DIR__ . "/../../../../../Model/Clases/Headers.php";
    require_once __DIR__ . "/../../../../../Model/Clases/Openssl.php";

    Headers::get_cors();
?>

    <?php
    include_once __DIR__ . "/../../../Public/Template/head.php";
    include_once __DIR__ . "/../../../Public/Template/head.php";
    include_once __DIR__ . "/../../../Public/Template/main_content.php";

    ?>
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Proyectos<span class="badge bg-dark text-light"
                                id="client_id_consultar_proyectos"></span>
                        </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
        </div>
        <!-- container-fluid -->
        <!-- container-fluid -->
        <div class="col-lg-12" style="margin-left: 5px;">

            <div class="card-body">
                <ul class="nav nav-pills arrow-navtabs nav-success bg-light mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#tab_borradores" role="tab"
                            aria-selected="true">
                            <span class="d-block d-sm-none"><i class="mdi mdi-home-variant"></i></span>
                            <span class="d-none d-sm-block">Borradores</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab_en_proceso" role="tab" aria-selected="false">
                            <span class="d-block d-sm-none"><i class="mdi mdi-account"></i></span>
                            <span class="d-none d-sm-block">En Proceso</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab_realizados" role="tab" aria-selected="false">
                            <span class="d-block d-sm-none"><i class="mdi mdi-account"></i></span>
                            <span class="d-none d-sm-block">Realizados por Sector</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab_total" role="tab" aria-selected="false">
                            <span class="d-block d-sm-none"><i class="mdi mdi-account"></i></span>
                            <span class="d-none d-sm-block">Total</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content text-muted">
                    <div class="tab-pane active" id="tab_borradores" role="tabpanel">
                        <div class="card card-body">
                            <table id="table_proyectos_borrador" style="text-align: center; width: 100%;">
                                <thead style="text-align: center;">
                                    <tr style="text-align: center;">
                                        <th style="width: 10px;text-align: center;">CREACION</th>
                                        <th style="width: 400px;text-align: center;">CLIENTE</th>
                                        <th style="width: 20px;text-align: center;">PAIS</th>
                                        <th style="width: 20px;text-align: center;">CREADOR</th>
                                        <th style="width: 20px;text-align: center;">SECTOR</th>
                                        <th style="width: 20px;text-align: center;">ASIGNADO</th>
                                        <th style="width: 20px;text-align: center;">SERVICIOS</th>
                                        <th style="width: 10px;text-align: center;">GESTIONAR</th>
                                        <!-- <th style="width: 30px;text-align: center;"></th> -->
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <tr style="text-align: center;">
                                        <td style="width: 300px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <!-- <td style="width: 30px;"></td> -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab_total" role="tabpanel">
                        <div class="card card-body">
                            <table id="table_proyectos_total" style="text-align: center; width: 100%;">
                                <thead style="text-align: center;">
                                    <tr style="text-align: center;">
                                        <th style="width: 400px;text-align: center;">CLIENTE</th>
                                        <th style="width: 20px;text-align: center;">REF</th>
                                        <th style="width: 20px;text-align: center;">CREADOR</th>
                                        <th style="width: 20px;text-align: center;">SECTOR</th>
                                        <th style="width: 20px;text-align: center;">ASIGNADO</th>
                                        <th style="width: 20px;text-align: center;">ESTADO</th>
                                        <th style="width: 20px;text-align: center;">SERVICIO</th>
                                        <th style="width: 10px;text-align: center;"></th>

                                        <!-- <th style="width: 30px;text-align: center;"></th> -->
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <tr style="text-align: center;">
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab_en_proceso" role="tabpanel">
                        <div class="card card-body">
                            <table id="table_proyectos_en_proceso" style="text-align: center; width: 100%;">
                                <thead style="text-align: center;">
                                    <tr style="text-align: center;">
                                        <th style="width: 300px;text-align: center;">TITULO</th>
                                        <th style="width: 300px;text-align: center;">INICIO</th>
                                        <th style="width: 30px;text-align: center;">FIN</th>
                                        <th style="width: 30px;text-align: center;">CREADOR</th>
                                        <th style="width: 30px;text-align: center;">SERVICIO</th>
                                        <th style="width: 30px;text-align: center;">TIPO</th>
                                        <th style="width: 30px;text-align: center;">HS</th>
                                        <th style="width: 30px;text-align: center;">ASIGNADO</th>
                                        <th style="width: 30px; text-align: center;">ESTADO</th>
                                        <th style="width: 30px;text-align: center;">SECTOR</th>
                                        <th style="width: 30px;text-align: center;">HOSTS</th>
                                        <th style="width: 30px;text-align: center;">Ver</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <tr style="text-align: center;">
                                        <td style="width: 300px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab_realizados" role="tabpanel">
                        <div class="card card-body">
                            <table id="table_proyectos_realizados" style="text-align: center; width: 100%;">
                                <thead style="text-align: center;">
                                    <tr style="text-align: center;">
                                        <th style="width: 300px;text-align: center;">TITULO</th>
                                        <th style="width: 300px;text-align: center;">INICIO</th>
                                        <th style="width: 30px;text-align: center;">FIN</th>
                                        <th style="width: 30px;text-align: center;">CREADOR</th>
                                        <th style="width: 30px;text-align: center;">SERVICIO</th>
                                        <th style="width: 30px;text-align: center;">TIPO</th>
                                        <th style="width: 30px;text-align: center;">HS</th>
                                        <th style="width: 30px;text-align: center;">ASIGNADO</th>
                                        <th style="width: 30px;text-align: center;">HOSTS</th>
                                        <th style="width: 30px;text-align: center;">Ver</th>
                                        <th style="width: 30px;text-align: center;"></th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <tr style="text-align: center;">
                                        <td style="width: 300px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                        <td style="width: 30px;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php
                    include_once __DIR__ . "/Modals/ModalAjustarProject.php";
                    include_once __DIR__ . "/Modals/ModalConsultarActivos.php";
                    include_once __DIR__ . "/Modals/ModalAgregarActivos.php";
                    include_once __DIR__ . "/Modals/ModalVerHosts.php";
                    ?>
                    <div class="tab-pane" id="arrow-contact" role="tabpanel">

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- End Page-content -->
    <?php
    include_once __DIR__ . "/../../../Public/Template/footer.php";
    ?>
<?php } else {
    header("Location:" . URL . "/View/Home/Logout.php");
}
?>

<script src="main.js?sheet=<?php echo rand() ?>"></script>