<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Ujian Online</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/pace/themes/orange/pace-theme-minimal.css') }}">
    <!-- CSS Per Pages -->
    {{--  <link rel="stylesheet" href="assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">  --}}
    @yield('css')
    <!-- End CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/skins/sidebar-nav-darkgray.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/skins/navbar3.css') }}" type="text/css">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon.png') }}">
    @if(!session('user_signin'))
    <script>window.location ='/'</script>
    @endif
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="index.html">
                    <img src="{{ asset('assets/img/logo-white.png') }}" alt="Klorofil Pro Logo" class="img-responsive logo">
                </a>
            </div>
            <div class="container-fluid">
                <div id="tour-fullwidth" class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="ti-arrow-circle-left"></i></button>
                </div>
                <form class="navbar-form navbar-left search-form">
                    <input type="text" value="" class="form-control" placeholder="Search dashboard...">
                    <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
                </form>
                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="btn-toggle-rightsidebar">
                                <i class="ti-layout-sidebar-right"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <span class="badge bg-danger">5</span>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li>You have 5 new notifications</li>
                                <li>
                                    <a href="#" class="notification-item">
                                        <i class="fa fa-hdd-o custom-bg-red"></i>
                                        <p>
                                            <span class="text">System space is almost full</span>
                                            <span class="timestamp">11 minutes ago</span>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="notification-item">
                                        <i class="fa fa-tasks custom-bg-yellow"></i>
                                        <p>
                                            <span class="text">You have 9 unfinished tasks</span>
                                            <span class="timestamp">20 minutes ago</span>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="notification-item">
                                        <i class="fa fa-book custom-bg-green2"></i>
                                        <p>
                                            <span class="text">Monthly report is available</span>
                                            <span class="timestamp">1 hour ago</span>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="notification-item">
                                        <i class="fa fa-bullhorn custom-bg-purple"></i>
                                        <p>
                                            <span class="text">Weekly meeting in 1 hour</span>
                                            <span class="timestamp">2 hours ago</span>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="notification-item">
                                        <i class="fa fa-check custom-bg-green"></i>
                                        <p>
                                            <span class="text">Your request has been approved</span>
                                            <span class="timestamp">3 days ago</span>
                                        </p>
                                    </a>
                                </li>
                                <li><a href="#" class="more">See all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" id="tour-help" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-help"></i> <span class="hide">Help</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="https://github.com/kol4k/eleraning-line#usage"><i class="ti-direction"></i> Basic Use</a></li>
                                <li><a href="#"><i class="ti-light-bulb"></i> Troubleshooting</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('assets/img/user.png') }}" alt="Avatar">
                            </a>
                            <ul class="dropdown-menu logged-user-menu">
                                <li><a href="profil.html"><i class="ti-user"></i> <span>{{ Session::get('user_signin')['user']['detail']['nama'] }}</span></a></li>
                                <li><a href="#"><i class="ti-settings"></i> <span>Pengaturan</span></a></li>
                                <li><a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="ti-power-off"></i> <span>Keluar</span></a></li>
                                <form id="logout-form" action="{{ Route('process.logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="sidebar-nav" class="sidebar">
            <nav>
                <ul class="nav" id="sidebar-nav-menu">
                    <li class="menu-group">Dashboard</li>
                    <li><a href="profile.html"><i class="ti-dashboard"></i> <span class="title">Dashboard</span></a></li>						
                    <li class="menu-group">Utama</li>
                    <!-- <li><a href="#"><i class="ti-dashboard"></i> <span class="title">Dashboard</span></a></li>						 -->
                    <li><a href="../../pages/ujian.html"><i class="ti-agenda"></i> <span class="title">Ujian</span></a></li>
                    <li><a href="#"><i class="ti-write"></i> <span class="title">Catatan</span></a></li>
                    <li class="menu-group">Pengaturan</li>
                    <li><a href="#"><i class="ti-settings"></i> <span class="title">Situs Web</span></a></li>												
                    <!-- <li class="panel">
                        <a href="#subPages" data-toggle="collapse" data-parent="#sidebar-nav-menu"><i class="ti-receipt"></i> <span class="title">Task</span> <i class="icon-submenu ti-angle-left"></i></a>
                        <div id="subPages" class="collapse">
                            <ul class="submenu">
                                <li><a href="page-profile.html">Profile</a></li>
                                <li><a href="page-login.html">Login</a></li>
                                <li><a href="page-register.html">Register</a></li>
                                <li><a href="page-lockscreen.html">Lockscreen</a></li>
                                <li><a href="page-forgot-password.html">Forgot Password</a></li>
                                <li><a href="page-404.html">Page 404</a></li>
                                <li><a href="page-500.html">Page 500</a></li>
                                <li><a href="page-blank.html">Blank Page</a></li>
                            </ul>
                        </div>
                    </li> -->
                    <!-- <li><a href="typography.html"><i class="ti-paragraph"></i> <span class="title">Typography</span></a></li> -->
                </ul>
                <button type="button" class="btn-toggle-minified" title="Toggle Minified Menu"><i class="ti-arrows-horizontal"></i></button>
            </nav>
        </div>
        <div class="main">
            <div class="content-heading clearfix">
                <div class="heading-left">
                    <h1 class="page-title" id="view-title"></h1>
                    <p class="page-subtitle" id="view-description"></p>
                </div>
                <ul class="breadcrumb" id="view-breadcrumb">
                    <li class="home"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#dashboards"> Dashboards </a></li>
                    <li class="active"> Dashboard v1 </li>
                </ul>
            </div>
            <div class="container-fluid">
                <div id="main-view"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/pace/pace.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/main-menu.js') }}"></script>
    <script src="{{ asset('assets/scripts/app.min.js') }}"></script>
    @yield('js')
    {{--  <script src="{{ asset('assets/scripts/klorofilpro-common.min.js') }}"></script>  --}}
</body>
</html>