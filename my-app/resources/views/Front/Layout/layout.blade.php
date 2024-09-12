<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop | eCommers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('Front/assets/img/icon/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/price_rangs.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('Front/assets/css/style.css')}}">
</head>

<body>

    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('Front/assets/img/icon/loder.png')}}" alt="loder">
                </div>
            </div>
        </div>
    </div>

    <header>
        @include('Front.inc.header')
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('Front.inc.footer')
    </footer>

    <div id="back-top">
        <a class="wrapper" title="Go to Top" href="#">
            <div class="arrows-container">
                <div class="arrow arrow-one">
                </div>
                <div class="arrow arrow-two">
                </div>
            </div>
        </a>
    </div>

    <script src="{{asset('Front/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('Front/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('Front/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('Front/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Front/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('Front/assets/js/slick.min.js')}}"></script>
    <script src="{{asset('Front/assets/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('Front/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('Front/assets/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('Front/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('Front/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('Front/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('Front/assets/js/price_rangs.js')}}"></script>
    <script src="{{asset('Front/assets/js/contact.js')}}"></script>
    <script src="{{asset('Front/assets/js/jquery.form.js')}}"></script>
    <script src="{{asset('Front/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('Front/assets/js/mail-script.js')}}"></script>
    <script src="{{asset('Front/assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('Front/assets/js/plugins.js')}}"></script>
    <script src="{{asset('Front/assets/js/main.js')}}"></script>
    <script src="{{asset('Front/assets/js/slider.js')}}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
</body>

</html>
