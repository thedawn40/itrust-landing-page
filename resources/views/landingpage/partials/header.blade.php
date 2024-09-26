<!-- Header -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="" class="logo d-flex align-items-center">
            <img src="../../img/itrust_icon.png" alt="">
        </a>
        <!-- .navbar -->
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
                <li><a class="nav-link scrollto {{ Request::is('solutions*') ? 'active' : '' }}" href="/solutions">Solutions</a></li>
                <li><a class="nav-link scrollto {{ Request::is('news-events*') ? 'active' : '' }}" href="/news-events">News & Event</a></li>
                <li><a class="nav-link scrollto {{ Request::is('contact-us*') ? 'active' : '' }}" href="/contact-us">Contact</a></li>
                <li style="cursor: not-allowed; pointer-events:none" > <a href="#"><span style="border-radius: 50%; margin-right:5px" class="flag-icon flag-icon-us flag-icon-squared"></span> EN </a></li>
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/admin/dashboard">Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li style="height: 30px">
                        <form action="/logout">
                            @csrf
                            <button type="submit" class="dropdown-item" style="font-size: 14px; font-weight:bold">Sign Out</button>
                        </form>
                    </li>
                    </ul>
                  </li>               
                @else
                @endauth
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
<!-- End Header -->