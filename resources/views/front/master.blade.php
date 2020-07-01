<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from aqualinkbangladesh.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jun 2020 06:52:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <title>@yield('title')</title>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,900%7CGentium+Basic:400italic&amp;subset=latin,latin" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('/') }}front/assets/css/extras.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/assets/css/theme.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/assets/css/corporate.min.css">
    <link rel="stylesheet" media="screen" href="{{ asset('/') }}front/assets/particles/css/style.css">
    <link rel="stylesheet" media="screen" href="{{ asset('/') }}front/assets/circular/css/circle.css">
    <link rel="shortcut icon" href="{{ asset('/') }}front/assets/images/aqualink.png">

{{--    <link rel="stylesheet" href="{{ asset('/') }}admin/css/responsive.css"/>--}}
{{--    <link rel="stylesheet" href="{{ asset('/') }}admin/asset/flaticon.css"/>--}}
{{--    <link rel="stylesheet" href="{{ asset('/') }}admin/asset/css/all.css"/>--}}
{{--    <link rel="stylesheet" href="{{ asset('/') }}admin/asset/css/etalage.css"/>--}}
{{--    <link rel="icon" type="image/png" href="{{ asset('/') }}admin/images/logo/favicon.ico" sizes="32x32"/>--}}
{{--    <link rel="icon" type="image/png" href="{{ asset('/') }}admin/images/logo/favicon.ico" sizes="16x16"/>--}}
</head>

<body oncontextmenu="return false;">

@include('front.includes.header')
<div class="menu navbar navbar-static-top header-logo-left-menu-right oxy-mega-menu navbar-sticky" id="masthead">
    <div class="container">
        <div class="navbar-header"> <button class="navbar-toggle collapsed" data-target=".main-navbar" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> <a class="navbar-brand" href="{{ route('/') }}">
                <img src="{{ asset('/') }}front/assets/images/aqualink.png" alt="logo" class="img-responsive">
            </a> </div>
        <div class="nav-container">
            <nav class="collapse navbar-collapse main-navbar logo-navbar navbar-right">
                <div class="menu-container">
                    <ul class="nav navbar-nav" id="menu-main">
                        <li class="menu-item "> <a href="{{ route('/') }}">Home</a> </li>
                        <li class="menu-item"> <a href="">About Us</a> </li>
                        <li class="menu-item"> <a href="">Services</a> </li>
                        <li class="menu-item  dropdown "> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products</a>
                            <ul class="dropdown-menu dropdown-menu-left ">
                                <li class="menu-item"> <a href="{{ route('senso-meter') }}">Sensometer</a> </li>
                                <li class="menu-item"> <a href="{{ route('smart-attendance') }}">Smart Attendance System</a> </li>
                            </ul>
                        </li>
                        <li class="menu-item   "> <a href="{{ route('contact-us') }}">Contact</a> </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

@yield('body')
@include('front.includes.footer')

<script type="text/javascript">
    var oxyThemeData = {
        navbarHeight: 100,
        navbarScrolled: 90,
        navbarScrolledPoint: 20,
        menuClose: 'off',
        scrollFinishedMessage: 'No more items to load.',
        hoverMenu:
            {
                hoverActive: false,
                hoverDelay: 1,
                hoverFadeDelay: 200
            },
        siteLoader: 'on'
    };
</script>
<script src="{{ asset('/') }}front/assets/js/theme.min.js"></script>

<script src="{{ asset('/') }}front/assets/particles/particles.js"></script>
<script src="{{ asset('/') }}front/assets/particles/js/app.js"></script>

<!-- stats.js -->
<script src="{{ asset('/') }}front/assets/particles/js/lib/stats.js"></script>
<script>
    var count_particles, stats, update;
    stats = new Stats;
    stats.setMode(0);
    stats.domElement.style.position = 'absolute';
    stats.domElement.style.left = '0px';
    stats.domElement.style.top = '0px';
    document.body.appendChild(stats.domElement);
    count_particles = document.querySelector('.js-count-particles');
    update = function() {
        stats.begin();
        stats.end();
        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
            count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
</script>
<script src="{{ asset('/') }}front/assets/circular/js/circle.js"></script>
</body>


<!-- Mirrored from aqualinkbangladesh.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jun 2020 06:53:51 GMT -->
</html>
