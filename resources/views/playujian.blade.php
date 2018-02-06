<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>Laravel</title
        
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
        
        <script src="{{ asset('play/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('play/js/popper.min.js') }}"></script>
        <script src="{{ asset('play/js/bootstrap.js') }}"></script>
        <script src="{{ asset('play/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('play/js/course.js') }}"></script>
        
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
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            Survey
            </div>
            <div class="modal-body">
            <form class="form-horizontal" id="profil" method="POST" action="#" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                    <p>Akhir pekan ini saya sering mengunjungi sosial media...</p>
                <label class="btn btn-primary">
                                <input type="radio" name="optradio">Facebook</label>
                            </label>
                            <label class="btn btn-success">
                                <input type="radio" name="optradio">Line</label>
                            </label>
                            <label class="btn btn-dark">
                                <input type="radio" name="optradio">BBM</label>
                            </label>
                            <label class="btn btn-info">
                                <input type="radio" name="optradio">Telegram</label>
                            </label>
                <label class="btn btn-primary">
                                <input type="radio" name="optradio">Twitter</label>
                            </label>
            </div>
            
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-default" form="profil">Submit</button>
            </div>
            </form>
        </div>
        </div>
    </div>
    <!-- End Modal -->
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
            <div class="col-sm-6">
                <h4>39.</h4><p>Ini merupakan bagian akhir dari sebuah teks eksposisi yang berupa penguatan kembali atas pendapat yang telah ditunjang oleh fakta-fakta dalam bagian argumentasi. Disebut apa struktur teks eksposisi yang dimaksud ….</p>
            </div>
            <div class="col-sm-6">
            <label class="btn btn-primary">
                <input type="radio" name="optradio">A . Pernyataan pendapat (tesis)</label><br>
            </label>
            <label class="btn btn-primary">
                <input type="radio" name="optradio">B . Argumentasi</label><br>
            </label>
            <label class="btn btn-primary">
                <input type="radio" name="optradio">C . Contoh</label><br>
            </label>
            <label class="btn btn-primary">
                <input type="radio" name="optradio">D . Fakta</label><br>
            </label>
            <label class="btn btn-primary">
                <input type="radio" name="optradio">E . Penegasan Ulang</label><br>
            </label>
            </div>
            <div class="col-sm-12">
                <div class="next">
                    <button class="btn btn-primary">Berikutnya</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
      $("#timer")
      .countdown("2018-02-07 10:00:00", function(event) {
        $(this).html(
          event.strftime('<h1><i>%H</i> Jam <i>%M</i> Menit %S Detik</h1>')
        );
      });
    </script>
    <div class="clear"></div>

    </body>
</html>