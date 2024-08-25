<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>iTrust | {{ $title }}</title>

    <!-- Favicon -->
    <link rel="icon" href="../../../../../../img/itrust_icon.ico" type="image/x-icon">
    <link href="../../../../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="../../../../../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../../../../../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
</head>

<body id="body-pd">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon">
                    <img src="../../../../../../img/itrust_icon.ico" width="30px" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">ITrust</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item  {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <li class="nav-item {{ Request::is('admin/company') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/company">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Company Profile</span></a>
            </li>

            <li class="nav-item {{ Request::is('admin/main-content') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/main-content">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Main Content</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item {{ Request::is('admin/solution*') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/solution">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Solutions</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item {{ Request::is('admin/news*') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/news">
                    <i class="fas fa-fw fa-table"></i>
                    <span>News & Event</span></a>
            </li>

             <!-- Nav Item - Tables -->
             <li class="nav-item {{ Request::is('admin/partner*') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/partner">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Partners</span></a>
            </li>

            <li class="nav-item {{ Request::is('admin/client*') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/client">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Clients</span></a>
            </li>

            <li class="nav-item {{ Request::is('message*') ? 'active' : '' }}">
                <a class="nav-link" href="/message">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Message</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item {{ Request::is('admin/category*') ? 'active' : '' }}">
                <a class="nav-link" href="/admin/category">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Category</span></a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                             <img class="img-profile rounded-circle"
                                    src="../../../../../assets/img/undraw_profile.svg">
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="/">Home</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li style="height: 30px">
                                <form action="/logout">
                                    @csrf
                                    <button type="submit" class="dropdown-item" style="font-size: 14px; font-weight:bold">Sign Out</button>
                                </form>
                            </li>
                            </ul>
                          </li>  

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div>
                        @yield('container')
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; PT i-Trust Data Teknologi 2024</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../../../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../../../assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../../../../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../../../../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../../../../assets/js/demo/datatables-demo.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
        // Function to set the initial state based on local storage
        function setInitialNavbarState(navId, bodyId, headerId, toggleId) {
            const nav = document.getElementById(navId);
            const bodypd = document.getElementById(bodyId);
            const headerpd = document.getElementById(headerId);
            const toggle = document.getElementById(toggleId);

            bodypd.classList.add('no-transition');

            // Retrieve the navbar state from local storage
            const navbarState = localStorage.getItem('navbarState');

            // Apply the saved state
            if (navbarState === 'shown') {
                bodypd.classList.add('body-pd');
            }
            bodypd.classList.remove('no-transition');
        }

        document.addEventListener("DOMContentLoaded", function(event) {
            // Set the initial state
            setInitialNavbarState('nav-bar', 'body-pd', 'header', 'header-toggle');

            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                      nav = document.getElementById(navId),
                      bodypd = document.getElementById(bodyId),
                      headerpd = document.getElementById(headerId);

                // Validate that all variables exist
                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        // toggle navbar
                        nav.classList.toggle('show');
                        // toggle icon
                        toggle.classList.toggle('bx-x');
                        // toggle padding to body
                        bodypd.classList.toggle('body-pd');
                        // toggle padding to header
                        headerpd.classList.toggle('body-pd');

                        // Save the navbar state to local storage
                        if (nav.classList.contains('show')) {
                            localStorage.setItem('navbarState', 'shown');
                        } else {
                            localStorage.setItem('navbarState', 'hidden');
                        }
                    });
                }
            }

            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header');

            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll('.nav_link');

            function colorLink() {
                if (linkColor) {
                    linkColor.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                }
            }
            linkColor.forEach(l => l.addEventListener('click', colorLink));

            // Your code to run since DOM is loaded and ready
        });

        $(document).ready(function() {
            $('#summernote').summernote({
                height:200
            });

            $('#descriptionEditor').summernote({
                height: 200,
                // toolbar: [
                //     ['style', ['style']],
                //     ['font', ['bold', 'underline', 'clear']],
                //     ['para', ['ul', 'ol', 'paragraph']],
                //     ['view', ['fullscreen', 'codeview', 'help']]
                // ]
            });

            // Initialize Summernote for the media editor with image/video configuration
            $('#mediaEditor').summernote({
                height: 200,
                // toolbar: [
                //     ['insert', ['picture', 'video']],
                //     ['view', ['fullscreen', 'codeview', 'help']]
                // ]
            });
        });
    </script>
</body>


</html>