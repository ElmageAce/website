<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.ico') }}">
    <meta name="description" content="Event Management System UAJY">
    <meta name="keywords" content="event, management, system, atmaevent">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('frontend/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/availability-calendar.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
</head>

<body>
<header class="default-header">
    <div class="container">
        <div class="header-wrap">
            <div class="header-top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="#home"><img src="{{ asset('frontend/img/logo.png') }}" width="250px" height="auto"
                                         alt="Logo AtmaEvent"></a>
                </div>
                <div class="main-menubar d-flex align-items-center">
                    @if (Route::has('login'))
                        <nav class="hide">
                            @auth
                                <a href="{{ route('home') }}">Beranda</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Daftar</a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                    <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
            <div class="banner-content col-lg-6 col-md-12">
                <h1>
                    <strong>
                        Sistem Manajemen Acara
                    </strong>
                </h1>
                <h4 style="color: white;">Universitas Atma Jaya Yogyakarta</h4>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('frontend/js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="{{ asset('frontend/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('frontend/js/availability-calendar.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('frontend/js/parallax.min.js') }}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
</body>
</html>
