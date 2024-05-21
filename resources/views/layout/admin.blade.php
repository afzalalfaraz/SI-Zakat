<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="admin/img/logo/logo.png" rel="icon">
    <title>Masjid Al-Khair - Dashboard</title>
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="admin/css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="img/logo.png">
                </div>
                <div class="sidebar-brand-text mx-2">Masjid Al-Khair</div>
            </a>
            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="/kas">
                    <i class="fas fa-download"></i>
                    <span>Data Kas Masuk</span>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kas-keluar">
                  <i class="fas fa-upload"></i>
                  <span>Data Kas Keluar</span>
              </a>
          </li>

            <li class="nav-item">
                <a class="nav-link" href="/pembayaran-admin">
                    <i class="fas fa-money-check-alt"></i>
                    <span>Data Pembayaran</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/agenda-admin">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Data Agenda</span>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/donasi">
                  <i class="fas fa-hand-holding-heart"></i>
                  <span>Data Donasi</span>
              </a>
          </li>
            
        </ul>

        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">

                        {{-- <div class="topbar-divider d-none d-sm-block"></div> --}}

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                                <span class="ml-2 d-none d-lg-inline text-white small">Maman Ketoprak</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                {{-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> 
                                <div class="dropdown-divider"></div>
                                --}}

                                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">

                    @yield('main')

                    <!-- Modal Logout -->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to logout?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary"
                                        data-dismiss="modal">Cancel</button>
                                    <a href="login.html" class="btn btn-primary">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!---Container Fluid-->
            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">

            </footer>
            <!-- Footer -->

        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="admin/js/ruang-admin.min.js"></script>
    <script src="admin/vendor/chart.js/Chart.min.js"></script>
    <script src="admin/js/demo/chart-area-demo.js"></script>
</body>

</html>
