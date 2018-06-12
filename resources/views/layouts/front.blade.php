<!DOCTYPE html>

<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Simon GHX - Portfolio</title>
    <meta name="description" content="" />
    <meta name="keywords" content="creative, portfolio, agency, template, theme, designed, html5, html, css3, responsive, apollo, onepage" />
    <meta name="author" content="nileforest">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="apple-touch-icon" href="img/favicon.png" />

    <!-- Css -->
    <link href="{{asset('theme/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/css/plugins/animate.css')}}" rel="stylesheet" type="text/css" />
</head>
<body class="wow-animate">

    <!-- Site preloader -->
    <section id="preloader">
        <div class="site-spinner"></div>
    </section>
    <!-- End Site preloader -->

    <!-- Page Wraper -->
    <div id="page-wraper">

        @include('partials.nav')

        @yield('content')

        @include('partials.footer')

  </div>
<!-- End Page Wraper -->



    <!-- JS Script -->
    <script src="{{asset('theme/js/jquery-1.11.3.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme/js/plugins/jquery.easing.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme/js/plugins/SmoothScroll.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme/js/plugins/owl.carousel.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme/js/plugins/wow.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme/js/plugins/isotope.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme/js/plugins/jquery.stellar.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme/js/plugins/jquery.fitvids.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme/js/plugins/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme/js/plugins/jquery.appear.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme/js/plugins/jquery.countTo.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme/js/plugins/jquery.mb.YTPlayer.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme/js/plugins/jquery.simple-text-rotator.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme/js/plugins/jquery.backstretch.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme/js/plugins/jquery.singlePageNav.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme/js/plugins/jquery.validate.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme/js/send-subscribe.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme/js/contact-form.js')}}" type="text/javascript"></script>
    <script src="{{asset('theme/js/theme.js')}}" type="text/javascript"></script>


</body>
</html>
