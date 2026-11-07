<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.svg">

    <title>MediCitas - Doctores</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Logo -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MediCitas</div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Panel Administrativo</span></a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">Gestión médica</div>

            <li class="nav-item">
                <a class="nav-link" href="pacientes.php">
                    <i class="fas fa-fw fa-procedures"></i>
                    <span>Pacientes</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="doctores.php">
                    <i class="fas fa-fw fa-user-md"></i>
                    <span>Doctores</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="agendar-cita.php">
                    <i class="fas fa-fw fa-calendar-plus"></i>
                    <span>Agendar Cita</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="historial-clinico.php">
                    <i class="fas fa-fw fa-notes-medical"></i>
                    <span>Historial Clínico</span></a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">Análisis</div>

            <li class="nav-item">
                <a class="nav-link" href="charts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Reportes</span></a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">Cuenta</div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-user-lock"></i>
                    <span>Acceso</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Usuarios:</h6>
                        <a class="collapse-item" href="login.php">Iniciar sesión</a>
                        <a class="collapse-item" href="register.php">Registrar usuario</a>
                        <a class="collapse-item" href="forgot-password.php">Recuperar contraseña</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar paciente, doctor o cita..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-info" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Buscar paciente, doctor o cita..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-info" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alertas
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">7 de noviembre, 2026</div>
                                        <span class="font-weight-bold">El reporte mensual de citas está disponible.</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-calendar-check text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">6 de noviembre, 2026</div>
                                        15 citas confirmadas para mañana.
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">4 de noviembre, 2026</div>
                                        La Dra. Reyes reprogramó su agenda del viernes.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Ver todas las alertas</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Mensajes
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">¿Puedo cambiar mi cita al miércoles?</div>
                                        <div class="small text-gray-500">María Pérez · 58 min</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Los resultados de laboratorio ya están listos.</div>
                                        <div class="small text-gray-500">Laboratorio Clínico · 1 d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Gracias por la atención, todo excelente.</div>
                                        <div class="small text-gray-500">José Martínez · 2 d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">¿Hay cupos con cardiología esta semana?</div>
                                        <div class="small text-gray-500">Ana Gómez · 2 sem</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Ver más mensajes</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrador</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Mi perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configuración
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Registro de actividad
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Doctores</h1>
                        <a href="agendar-cita.php" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i
                                class="fas fa-calendar-plus fa-sm text-white-50"></i> Agendar cita</a>
                    </div>
                    <p class="mb-4">Equipo médico, especialidades y horarios de atención.</p>
                    <div class="row">
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card shadow h-100">
                                <div class="card-body text-center">
                                    <img class="rounded-circle mb-3" src="img/undraw_profile_1.svg" alt="Dra. Laura Méndez" style="width: 90px;">
                                    <h5 class="font-weight-bold text-gray-800 mb-1">Dra. Laura Méndez</h5>
                                    <div class="text-info font-weight-bold mb-2">Medicina General</div>
                                    <p class="small text-gray-600 mb-1"><i class="fas fa-door-open fa-fw"></i> Consultorio 101</p>
                                    <p class="small text-gray-600 mb-3"><i class="fas fa-clock fa-fw"></i> Lun - Vie · 8:00 - 16:00</p>
                                    <span class="badge badge-success mb-3">Disponible</span><br>
                                    <a href="agendar-cita.php" class="btn btn-info btn-sm"><i class="fas fa-calendar-plus"></i> Agendar con este doctor</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card shadow h-100">
                                <div class="card-body text-center">
                                    <img class="rounded-circle mb-3" src="img/undraw_profile_2.svg" alt="Dr. Carlos Rodríguez" style="width: 90px;">
                                    <h5 class="font-weight-bold text-gray-800 mb-1">Dr. Carlos Rodríguez</h5>
                                    <div class="text-info font-weight-bold mb-2">Cardiología</div>
                                    <p class="small text-gray-600 mb-1"><i class="fas fa-door-open fa-fw"></i> Consultorio 204</p>
                                    <p class="small text-gray-600 mb-3"><i class="fas fa-clock fa-fw"></i> Lun - Jue · 9:00 - 14:00</p>
                                    <span class="badge badge-info mb-3">En consulta</span><br>
                                    <a href="agendar-cita.php" class="btn btn-info btn-sm"><i class="fas fa-calendar-plus"></i> Agendar con este doctor</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card shadow h-100">
                                <div class="card-body text-center">
                                    <img class="rounded-circle mb-3" src="img/undraw_profile_2.svg" alt="Dr. Pedro Santana" style="width: 90px;">
                                    <h5 class="font-weight-bold text-gray-800 mb-1">Dr. Pedro Santana</h5>
                                    <div class="text-info font-weight-bold mb-2">Pediatría</div>
                                    <p class="small text-gray-600 mb-1"><i class="fas fa-door-open fa-fw"></i> Consultorio 105</p>
                                    <p class="small text-gray-600 mb-3"><i class="fas fa-clock fa-fw"></i> Lun - Vie · 8:00 - 12:00</p>
                                    <span class="badge badge-success mb-3">Disponible</span><br>
                                    <a href="agendar-cita.php" class="btn btn-info btn-sm"><i class="fas fa-calendar-plus"></i> Agendar con este doctor</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card shadow h-100">
                                <div class="card-body text-center">
                                    <img class="rounded-circle mb-3" src="img/undraw_profile_3.svg" alt="Dra. Sofía Reyes" style="width: 90px;">
                                    <h5 class="font-weight-bold text-gray-800 mb-1">Dra. Sofía Reyes</h5>
                                    <div class="text-info font-weight-bold mb-2">Ginecología</div>
                                    <p class="small text-gray-600 mb-1"><i class="fas fa-door-open fa-fw"></i> Consultorio 210</p>
                                    <p class="small text-gray-600 mb-3"><i class="fas fa-clock fa-fw"></i> Mar - Sáb · 9:00 - 15:00</p>
                                    <span class="badge badge-success mb-3">Disponible</span><br>
                                    <a href="agendar-cita.php" class="btn btn-info btn-sm"><i class="fas fa-calendar-plus"></i> Agendar con este doctor</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card shadow h-100">
                                <div class="card-body text-center">
                                    <img class="rounded-circle mb-3" src="img/undraw_profile.svg" alt="Dr. Miguel Herrera" style="width: 90px;">
                                    <h5 class="font-weight-bold text-gray-800 mb-1">Dr. Miguel Herrera</h5>
                                    <div class="text-info font-weight-bold mb-2">Odontología</div>
                                    <p class="small text-gray-600 mb-1"><i class="fas fa-door-open fa-fw"></i> Consultorio 003</p>
                                    <p class="small text-gray-600 mb-3"><i class="fas fa-clock fa-fw"></i> Lun - Vie · 8:00 - 17:00</p>
                                    <span class="badge badge-secondary mb-3">De vacaciones</span><br>
                                    <a href="agendar-cita.php" class="btn btn-info btn-sm"><i class="fas fa-calendar-plus"></i> Agendar con este doctor</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card shadow h-100">
                                <div class="card-body text-center">
                                    <img class="rounded-circle mb-3" src="img/undraw_profile_3.svg" alt="Dra. Carmen Peña" style="width: 90px;">
                                    <h5 class="font-weight-bold text-gray-800 mb-1">Dra. Carmen Peña</h5>
                                    <div class="text-info font-weight-bold mb-2">Dermatología</div>
                                    <p class="small text-gray-600 mb-1"><i class="fas fa-door-open fa-fw"></i> Consultorio 112</p>
                                    <p class="small text-gray-600 mb-3"><i class="fas fa-clock fa-fw"></i> Lun - Mié · 13:00 - 18:00</p>
                                    <span class="badge badge-success mb-3">Disponible</span><br>
                                    <a href="agendar-cita.php" class="btn btn-info btn-sm"><i class="fas fa-calendar-plus"></i> Agendar con este doctor</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; MediCitas 2026</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Deseas salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecciona "Cerrar sesión" si deseas terminar tu sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="login.php">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>