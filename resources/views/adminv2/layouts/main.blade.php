<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iTrust | {{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="../../../../../../img/itrust_icon.ico" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../../../../assets-3/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../../../assets-3/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../../../../assets-3/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../../../../assets-3/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../../../../../assets-3/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../../../../../assets-3/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../../../../../assets-3/vendor/simple-datatables/style.css" rel="stylesheet">
  
  <link href="../../../../../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">    

  <!-- Template Main CSS File -->
  <link href="../../../../../assets-3/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/" target="_blank" class="logo d-flex align-items-center">
        <img src="../../../../../../img/itrust_icon.ico" width="30px" alt="">
        <span class="d-none d-lg-block">iTrust</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        {{-- <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon--> --}}

        {{-- <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav --> --}}

        {{-- <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav --> --}}

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            {{-- <img class="rounded-circle" src="../../../../../assets/img/undraw_profile.svg"> --}}

            {{-- <img src="../../assets-3/img/profile-img.jpg" alt="Profile" class="rounded-circle"> --}}
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
              {{-- <span>Web Designer</span> --}}
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            {{-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li> --}}
            {{-- <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li> --}}
            {{-- <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li> --}}

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item ">
        <a class="nav-link {{ Request::is('admin/dashboard') ? '' : 'collapsed' }}" href="/admin/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Settings</li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/heading') ? '' : 'collapsed' }}" href="/admin/heading">
          <i class="bi bi-menu-button-wide"></i>
          <span>Headings</span>
          </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/company') ? '' : 'collapsed' }}" href="/admin/company">
            <i class="bi bi-menu-button-wide"></i>
            <span>Company Profile</span>
            </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/main-content*') ? '' : 'collapsed' }}" href="/admin/main-content">
          <i class="ri-apps-2-line"></i>
          <span>Main Content</span>
          </a>
      </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/solution*') ? '' : 'collapsed' }}" href="/admin/solution">
          <i class="bi bi-card-checklist"></i>
          <span>Solutions</span>
          </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/news*') ? '' : 'collapsed' }}" href="/admin/news">
            <i class="bi bi-newspaper"></i>
            <span>News & Event</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/partner*') ? '' : 'collapsed' }}" href="/admin/partner">
          <i class="ri-group-line"></i>
          <span>Partners</span>
          </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/client*') ? '' : 'collapsed' }}" href="/admin/client">
          <i class="ri-group-line"></i>
          <span>Clients</span>
          </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link {{ Request::is('message*') ? '' : 'collapsed' }}" href="/message">
            <i class="bi bi-envelope"></i>
            <span>Message</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/category*') ? '' : 'collapsed' }}" href="/admin/category">
          <i class="ri-book-3-line"></i>
          <span>Categories</span>
          </a>
        </li><!-- End Profile Page Nav -->
      
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="container-fluid">

        <div>
            @yield('container')
        </div>

    </div>    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../../../../assets-3/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../../../../../assets-3/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../../../assets-3/vendor/chart.js/chart.umd.js"></script>
  <script src="../../../../../assets-3/vendor/echarts/echarts.min.js"></script>
  <script src="../../../../../assets-3/vendor/quill/quill.js"></script>
  <script src="../../../../../assets-3/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../../../../assets-3/vendor/tinymce/tinymce.min.js"></script>
  <script src="../../../../../assets-3/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../../../../assets-3/js/main.js"></script>

  <!-- Bootstrap core JavaScript-->
  <script src="../../../../../assets/vendor/jquery/jquery.min.js"></script>
  {{-- <script src="../../../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
  
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
  
  <!-- Page level plugins -->
  <script src="../../../../../assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../../../../../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="../../../../../assets/js/demo/datatables-demo.js"></script>


  <script>
    $(document).ready(function() {
            $('#summernote').summernote({
              placeholder: 'Write your content here...',
                minHeight: null, // Disable minimum height
                maxHeight: null, // Disable maximum height
                height: 600, // Set initial height to auto
            });
            $('#descriptionEditor').summernote({
                height: 600,
            });

            // Initialize Summernote for the media editor with image/video configuration
            $('#mediaEditor').summernote({
                height: 600,
            });
        });
  </script>
</body>

</html>