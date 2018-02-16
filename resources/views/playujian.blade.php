<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>Laravel</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- CSS -->
        <link href="{{ asset('play/css/owl.css') }}" rel="stylesheet">
        <link href="{{ asset('play/css/nav.css') }}" rel="stylesheet">
        <link href="{{ asset('play/css/woo.css') }}" rel="stylesheet">
        <link href="{{ asset('play/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('play/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
        <!--<link href="/css/bootstrap-grid.css" rel="stylesheet" type="text/css">
        <link href="/css/bootstrap-reboot.css" rel="stylesheet" type="text/css">-->
        <link href="{{ asset('play/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('play/css/responsive.css') }}" rel="stylesheet">
        
        <script>var token = '{{ Session::get('user_signin')['api_token'] }}';</script>
        <script>var time_start = '{{ Session::get('ujian')['waktu_mulai'] }}';</script>
        <script>var time_end = '{{ Session::get('ujian')['waktu_selesai'] }}';</script>
        <script src="{{ asset('play/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('play/js/popper.min.js') }}"></script>
        <script src="{{ asset('play/js/bootstrap.js') }}"></script>
        <script src="{{ asset('play/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('play/js/course.js') }}"></script>
        <script src="{{ asset('play/js/play.js') }}"></script>        
        
        <!-- Styles -->
        <style>
        @media (max-width: 989px) {
            #kategori {
                 padding-bottom: 5px;
            }
            #nav-auth {
                padding: 0px;
                float: right !important;
            }
            #nav-auth a {
                margin: 7px;
            }
        }
        </style>
    </head>
    <body>
    <!-- Banner -->
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="#">
                <img src="" width="150" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" style="color: #848791;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <!--<ul class="navbar-nav">
                    
                </ul>-->
                <ul class="navbar-nav mx-auto">
                </ul>
                <ul class="navbar-nav menux">
                    <li class="nav-item user-account" id="nav-auth">
                        <form class="form-inline">
                            <button type="button" class="btn btn-info">Kembali</button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-inner" id="timer">
                            <h1>Waktu Berakhir: <i>12</i> Jam <i>30</i> Menit Lagi</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6" id="tasks"></div>
            <form class="form" id="soal" action="{{ Route('process.nilai') }}" method="POST">
            {{ csrf_field() }}
            <div id="d_jawaban"></div>
            {{--  <input type="hidden" name="jawaban[]" value="[]" id="jawaban">  --}}
            <div class="col-sm-6">
            <label class="btn btn-primary" id="a"></label><br>
            <label class="btn btn-primary" id="b"></label><br>
            <label class="btn btn-primary" id="c"></label><br>
            <label class="btn btn-primary" id="d"></label><br>
            <label class="btn btn-primary" id="e"></label><br>
            </div>
            </form>
            <div class="col-sm-12">
                <div class="next" id="btn">
                    <button class="btn btn-primary" id="next" onclick="show()">Berikutnya</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        countdownTime('#timer');
    </script>
    <div class="clear"></div>

    </body>
</html>