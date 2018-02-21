<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Ujian Online</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link class="default-style" rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link class="default-style" rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link class="default-style" rel="stylesheet" href="{{ asset('assets/vendor/themify-icons/css/themify-icons.css') }}">
    <link class="default-style" rel="stylesheet" href="{{ asset('assets/vendor/pace/themes/orange/pace-theme-minimal.css') }}">d
    <!-- CSS Per Pages -->
    {{--  <link class="default-style" rel="stylesheet" href="assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">  --}}
    @yield('css')
    <!-- End CSS -->
    <link class="default-style" id="main-style" rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}">
    <link class="default-style" rel="stylesheet" href="{{ asset('assets/css/skins/sidebar-nav-darkgray.css') }}" type="text/css">
    <link class="default-style" rel="stylesheet" href="{{ asset('assets/css/skins/navbar3.css') }}" type="text/css">
    <link class="default-style" rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link class="default-style" rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon.png') }}">
    @if(!session('user_signin'))
    <script class="default-js">window.location ='/'</script>
    @endif
</head>
<body class="layout-topnav">
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="top-bar clearfix">
                <div class="container-bar">
                    <div class="brand">
                        <a href="index.html">
                            <img src="assets/img/logo-white-small.png" alt="Klorofil Pro Logo" class="img-responsive logo">
                        </a>
                    </div>
                    <div class="navbar-right">
                        <form class="navbar-form navbar-left search-form">
                            <input type="text" value="" class="form-control" placeholder="Type keyword here...">
                            <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div id="navbar-menu" class="bottom-bar clearfix">
                <div class="navbar-header">
                    <div class="brand visible-xs">
                        <a href="index.html">
                            <img src="assets/img/logo-dark.png" alt="Klorofil Pro Logo" class="img-responsive logo">
                        </a>
                    </div>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                        <i class="ti-menu"></i>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="main-nav">
                    <ul class="nav navbar-nav">
                        <li><a href="/"><i class="ti-back-left"></i> <span>Kembali ke Depan</span></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('assets/img/user.png') }}" alt="Avatar">
                                <span>{{ Session::get('user_signin')['user']['detail']['nama'] }}</span> <i class="ti-angle-down icon-submenu"></i></a>
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
        <div class="main">
            <div class="main-content">
                <div class="container">
                    <div class="panel panel-headline">
                        <div class="panel-body">
                            <p class="lead">Anda baru saja menyelesaikan ujian {{ Session::get('detail')['message']['pelajaran']  }} yang ber-tipe {{ Session::get('detail')['message']['tipe']  }} dengan hasil nilai sebesar <code>{{ $nilai }}</code>.</p>                            
                            <p class="text-primary">Terimakasih sudah mengerjakan dan terus belajar yaa... ^_^</p>
                    
                            <hr>
                    
                            <p class="text-center">Education is the best friend. An educated person is respected everywhere. Education beats the beauty and the youth. ~ Chanakya</p>
                    
                            <hr>
                    
                            <p>peng.u.<code>mum</code>.an</p>
                            <p class="lead">Road to UNBK .</p>                                                        
                            <p class="lead">INFO UTS Genap dan US 2018 .</p>                            
                            <p class="lead">Tekan Kekerasan di Sekolah, Mendikbud Keluarkan 5 Aturan  .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- Scripts -->
    <script class="default-js" src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script class="default-js" src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script class="default-js" src="{{ asset('assets/vendor/pace/pace.min.js') }}"></script>
    <script class="default-js" src="{{ asset('assets/scripts/helper.js') }}"></script>
    <script class="default-js" src="{{ asset('assets/scripts/main-menu.js') }}"></script>
    <script class="default-js" src="{{ asset('assets/scripts/app.min.js') }}"></script>
    @yield('js')
</body>
</html>