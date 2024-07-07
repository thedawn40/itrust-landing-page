<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	{{-- <title>iTrust | {{ $title }}</title> --}}
	<title>iTrust | {{ $title }}</title>
    <link rel="icon" href="../img/itrust_icon.ico" />

	<link rel="stylesheet" href="../../../../assets/css/dashboard.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
	<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <!-- include libraries(jQuery, bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

	<style>
		/* trix-toolbar [data-trix-button-group="file-tools"]{
			display: none;
		} */
	</style>
</head>
<body id="body-pd" >
    {{-- <div class="img-bg" style="background-image: url('../img/itrust_icon.png'); background-position: center; background-size: 300px 100px; background-repeat: no-repeat;"> --}}
    {{-- </div> --}}

    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_toggle"> <img src="" alt="">Welcome back, {{ auth()->user()->name }}</div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <img src="../../../../img/itrust_icon.ico" width="30px" alt=""> <span class="nav_logo-name">iTrust</span> </a>
                <div class="nav_list"> 
					<a href="/" class="nav_link"> <i class='bx bx-home nav_icon'></i> <span class="nav_name">Home</span> </a>                     
                    <a href="/admin/dashboard" class="nav_link {{ Request::is('admin/dashboard') ? 'active' : '' }}"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                    <a href="/admin/company" class="nav_link {{ Request::is('admin/company') ? 'active' : '' }}"> <i class='bx bx-store-alt nav_icon'></i> <span class="nav_name">Company Profile</span> </a> 
					{{-- <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a>  --}}
					<a href="/admin/solution" class="nav_link {{ Request::is('admin/solution*') ? 'active' : '' }}"> <i class='bx bx-check-square nav_icon'></i> <span class="nav_name">Solutions</span> </a> 
					<a href="/admin/news" class="nav_link {{ Request::is('admin/news*') ? 'active' : '' }}"> <i class='bx bx-news nav_icon'></i> <span class="nav_name">News & Event</span> </a> 
					<a href="/admin/partner" class="nav_link {{ Request::is('admin/partner*') ? 'active' : '' }}"> <i class='bx bx-group nav_icon'></i> <span class="nav_name">Partner</span> </a> 
					<a href="/admin/client" class="nav_link {{ Request::is('admin/client*') ? 'active' : '' }}"> <i class='bx bx-user-plus nav_icon'></i> <span class="nav_name">Client</span> </a> 
					<a href="/message" class="nav_link {{ Request::is('message*') ? 'active' : '' }}"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Message</span> </a> 
					<a href="/admin/category" class="nav_link {{ Request::is('admin/category*') ? 'active' : '' }}"> <i class='bx bx-tag nav_icon'></i> <span class="nav_name">Category</span> </a> 
				</div>
            </div> 
			<a class="nav_link" type="submit" href="{{ url('/logout') }}"><i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sign Out</span></a>
        </nav>
    </div>
    <!--Container Main start-->
	<div style="margin-top: 100px">
        @yield('container')
	</div>
	<!--Container Main end-->

	<script>
        // Function to set the initial state based on local storage
        function setInitialNavbarState(navId, bodyId, headerId, toggleId) {
            const nav = document.getElementById(navId);
            const bodypd = document.getElementById(bodyId);
            const headerpd = document.getElementById(headerId);
            const toggle = document.getElementById(toggleId);

            // Temporarily disable transitions
            nav.classList.add('no-transition');
            bodypd.classList.add('no-transition');
            headerpd.classList.add('no-transition');
            toggle.classList.add('no-transition');

            // Retrieve the navbar state from local storage
            const navbarState = localStorage.getItem('navbarState');

            // Apply the saved state
            if (navbarState === 'shown') {
                nav.classList.add('show');
                bodypd.classList.add('body-pd');
                headerpd.classList.add('body-pd');
                toggle.classList.add('bx-x');
            }

            // Force reflow to apply the no-transition class
            nav.offsetHeight;

            // Re-enable transitions after applying the initial state
            nav.classList.remove('no-transition');
            bodypd.classList.remove('no-transition');
            headerpd.classList.remove('no-transition');
            toggle.classList.remove('no-transition');
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
    </script>
</body>
</html>