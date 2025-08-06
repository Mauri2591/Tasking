<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img class="mt-5"
                                        src="<?php echo URL ?>/View/Home/Public/velzon/assets/images/icono_telecom.png"
                                        alt="logo telecom" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img class="mt-5"
                                        src="<?php echo URL ?>/View/Home/Public/velzon/assets/images/icono_telecom.png"
                                        alt="logo telecom" height="17">
                                </span>
                            </a>

                            <!-- <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?php echo URL ?>/View/Home/Public/velzon/assets/images/logo-sm.png"
                                        alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo URL ?>/View/Home/Public/velzon/assets/images/logo-light.png"
                                        alt="" height="17">
                                </span>
                            </a> -->
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <!-- App Search-->

                    </div>

                    <div class="dropdown ms-sm-3 header-item topbar-user">
                        <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="d-flex align-items-center">
                                <i class=" ri-user-2-fill fs-20 text-info"></i>
                                <span class="text-start ms-xl-2">
                                    <span
                                        class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?php echo $_SESSION['usu_nom'] ?></span>
                                </span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" onclick="btnEditPerfil()" href="#"><i
                                    class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                    class="align-middle">Mi Perfil</span></a>
                            <!-- <a class="dropdown-item" href="apps-chat.html"><i
                                    class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i>
                                <span class="align-middle">Mensajes</span></a>
                            <a class="dropdown-item" href="apps-tasks-kanban.html"><i
                                    class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i>
                                <span class="align-middle">Tareas</span></a> -->
                            <a class="dropdown-item" href="<?php echo URL . "/View/Home/Logout.php" ?>"><i
                                    class=" ri-logout-box-line text-muted fs-16 align-middle me-1"></i>
                                <span class="align-middle">Salir</span></a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </header>
    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="<?php echo URL ?>/View/Home/Public/velzon/assets/images/icono_telecom.png" alt=""
                        height="22">
                </span>
                <span class="logo-lg">
                    <img src="<?php echo URL ?>/View/Home/Public/velzon/assets/images/icono_telecom.png" alt=""
                        height="17">
                </span>
            </a>
            <!-- Light Logo-->
            <a href="<?php echo URL . "/View/Home/"; ?>" class="logo logo-light">
                <span class="logo-sm">
                    <img src="<?php echo URL ?>/View/Home/Public/velzon/assets/images/icono_telecom.png" alt=""
                        height="22">
                </span>
                <span class="logo-lg p-0">
                    <h1> <img class="mt-5"
                            src="<?php echo URL ?>/View/Home/Public/velzon/assets/images/icono_telecom.png" alt="">
                    </h1>
                </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>

        <div id="scrollbar">
            <div class="container-fluid">
                <div id="two-column-menu">
                </div>
                <ul class="navbar-nav" id="navbar-nav">
                    <?php if (isset($_SESSION) && $_SESSION['rol_id'] == 1): ?>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarApps">
                                    <i class="ri-settings-3-line"></i> <span data-key="t-apps">Gestion</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarApps">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="<?php echo URL . "/View/Home/Gestion/Usuarios/" ?>" class="nav-link"
                                                data-key="t-calendar">Usuarios</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo URL . "/View/Home/Gestion/Clientes/" ?>" class="nav-link"
                                                data-key="t-chat">Clientes</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo URL . "/View/Home/Gestion/Clientes/Proyectos/" ?>"
                                                class="nav-link" data-key="t-chat">Proyectos</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Proyectos</span>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarSector" class="nav-link collapsed" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarSector" data-key="t-email">Sector</a>
                                <div class="menu-dropdown collapse" id="sidebarSector">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="<?php echo URL . "/View/Home/Gestion/Sectores/Ethical_hacking/"; ?>"
                                                class="nav-link" data-key="t-mailbox">Ethical Hacking</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo URL . "/View/Home/Gestion/Sectores/Calidad_Procesos/"; ?>"
                                                class="nav-link" data-key="t-mailbox">Calidad y Procesos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo URL . "/View/Home/Gestion/Sectores/SOC/"; ?>"
                                                class="nav-link" data-key="t-mailbox">SOC</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo URL . "/View/Home/Gestion/Sectores/SASE/"; ?>"
                                                class="nav-link" data-key="t-mailbox">SASE</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#sidebarServicios" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarServicios"
                                    data-key="t-email">Servicios</a>
                                <div class="menu-dropdown collapse" id="sidebarServicios">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="<?php echo URL . "/View/Home/Gestion/Sectores/Ethical_hacking/IR/"; ?>"
                                                class="nav-link" data-key="t-mailbox">INCIDENT RESPONSE</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    <?php elseif (isset($_SESSION) && $_SESSION['rol_id'] == 2): ?>
                        <?php switch ($_SESSION['sector_id']) {
                            case '1':
                        ?>
                                <li class="nav-item">
                                    <a href="#sidebarEmail" class="nav-link collapsed" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarEmail" data-key="t-email">Servicios</a>
                                    <div class="menu-dropdown collapse" id="sidebarEmail">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="<?php echo URL . "/View/Home/Gestion/Sectores/Ethical_hacking/Va/"; ?>"
                                                    class="nav-link" data-key="t-mailbox">Va's</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo URL . "/View/Home/Gestion/Sectores/Ethical_hacking/Pentest/"; ?>"
                                                    class="nav-link" data-key="t-mailbox">Pentest</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo URL . "/View/Home/Gestion/Sectores/Ethical_hacking/Sast/"; ?>"
                                                    class="nav-link" data-key="t-mailbox">SAST</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo URL . "/View/Home/Gestion/Sectores/Ethical_hacking/Wireless/"; ?>"
                                                    class="nav-link" data-key="t-mailbox">Wireless</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo URL . "/View/Home/Gestion/Sectores/Ethical_hacking/Mobile/"; ?>"
                                                    class="nav-link" data-key="t-mailbox">Mobile</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo URL . "/View/Home/Gestion/Sectores/Ethical_hacking/Proyectos_Propios/"; ?>"
                                                    class="nav-link" data-key="t-mailbox">Proyectos Propios</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo URL . "/View/Home/Gestion/Sectores/Ethical_hacking/CBI/"; ?>"
                                                    class="nav-link" data-key="t-mailbox">CBI</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo URL . "/View/Home/Gestion/Sectores/Ethical_hacking/Servicios_profesionales/"; ?>"
                                                    class="nav-link" data-key="t-mailbox">Servicios Profesionales</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo URL . "/View/Home/Gestion/Sectores/Ethical_hacking/IR/"; ?>"
                                                    class="nav-link" data-key="t-mailbox">INCIDENT RESPONSE</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            <?php
                                break;
                            case '2':
                            ?>
                                <li class="nav-item">
                                    <a href="#sidebarEmail" class="nav-link collapsed" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarEmail" data-key="t-email">Servicios</a>
                                    <div class="menu-dropdown collapse" id="sidebarEmail">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="<?php echo URL . "/View/Home/Gestion/Sectores/SOC/SOC/"; ?>"
                                                    class="nav-link" data-key="t-mailbox">SOC</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo URL . "/View/Home/Gestion/Sectores/SOC/CBI/"; ?>"
                                                    class="nav-link" data-key="t-mailbox">CBI</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo URL . "/View/Home/Gestion/Sectores/SOC/Servicios_profesionales/"; ?>"
                                                    class="nav-link" data-key="t-mailbox">SERVICIOS PROFESIONALES</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo URL . "/View/Home/Gestion/Sectores/SOC/IR/"; ?>"
                                                    class="nav-link" data-key="t-mailbox">INCIDENT RESPONSE</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            <?php
                                break;
                            case '3':
                            ?>
                                <li class="nav-item">
                                    <a href="#sidebarEmail" class="nav-link collapsed" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarEmail" data-key="t-email">Servicios</a>
                                    <div class="menu-dropdown collapse" id="sidebarEmail">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="<?php echo URL . "/View/Home/Gestion/Sectores/SASE/SASE/"; ?>"
                                                    class="nav-link" data-key="t-mailbox">SASE</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo URL . "/View/Home/Gestion/Sectores/SASE/CBI/"; ?>"
                                                    class="nav-link" data-key="t-mailbox">CBI</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo URL . "/View/Home/Gestion/Sectores/SASE/Servicios_profesionales/"; ?>"
                                                    class="nav-link" data-key="t-mailbox">SERVICIOS PROFESIONALES</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="<?php echo URL . "/View/Home/Gestion/Sectores/SASE/IR/"; ?>"
                                                    class="nav-link" data-key="t-mailbox">INCIDENT RESPONSE</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            <?php
                                break;
                            case '4':
                            ?>
                                <ul class="navbar-nav" id="navbar-nav">
                                    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                                    <li class="nav-item">
                                        <a href="#sidebarSector" class="nav-link collapsed" data-bs-toggle="collapse" role="button"
                                            aria-expanded="false" aria-controls="sidebarSector" data-key="t-email">Sector</a>
                                        <div class="menu-dropdown collapse" id="sidebarSector">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="<?php echo URL . "/View/Home/Gestion/Sectores/Ethical_hacking/"; ?>"
                                                        class="nav-link" data-key="t-mailbox">Ethical Hacking</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?php echo URL . "/View/Home/Gestion/Sectores/Calidad_Procesos/"; ?>"
                                                        class="nav-link" data-key="t-mailbox">Calidad y Procesos</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?php echo URL . "/View/Home/Gestion/Sectores/SOC/"; ?>"
                                                        class="nav-link" data-key="t-mailbox">SOC</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="<?php echo URL . "/View/Home/Gestion/Sectores/SASE/"; ?>"
                                                        class="nav-link" data-key="t-mailbox">SASE</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#sidebarServicios" data-bs-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="sidebarServicios"
                                            data-key="t-email">Servicios</a>
                                        <div class="menu-dropdown collapse" id="sidebarServicios">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="<?php echo URL . "/View/Home/Gestion/Sectores/Ethical_hacking/IR/"; ?>"
                                                        class="nav-link" data-key="t-mailbox">INCIDENT RESPONSE</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>

                        <?php
                                break;
                        } ?>
            </div>
        <?php endif; ?>

        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">