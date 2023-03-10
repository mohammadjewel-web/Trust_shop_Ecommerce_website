<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('adminAssets')}}/favicon.ico">
    <title>Trust Shop || @yield('title')</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{asset('adminAssets')}}/css/simplebar.css">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('adminAssets')}}/css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{asset('adminAssets')}}/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset('adminAssets')}}/css/app-light.css" id="lightTheme" disabled>
    <link rel="stylesheet" href="{{asset('adminAssets')}}/css/app-dark.css" id="darkTheme">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>
<body class="vertical  dark  ">
<div class="wrapper">
    @include('admin.include.heade')
    @include('admin.include.leftsidebar')
    @yield('content')
</div> <!-- .wrapper -->
<script src="{{asset('adminAssets')}}/js/jquery.min.js"></script>
<script src="{{asset('adminAssets')}}/js/popper.min.js"></script>
<script src="{{asset('adminAssets')}}/js/moment.min.js"></script>
<script src="{{asset('adminAssets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('adminAssets')}}/js/simplebar.min.js"></script>
<script src="{{asset('adminAssets')}}/js/daterangepicker.js"></script>
<script src="{{asset('adminAssets')}}/js/jquery.stickOnScroll.js"></script>
<script src="{{asset('adminAssets')}}/js/tinycolor-min.js"></script>
<script src="{{asset('adminAssets')}}/js/config.js"></script>
<script src="{{asset('adminAssets')}}/js/apps.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script async src="{{asset('adminAssets')}}/https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');
</script>
@yield('script')
</body>
</html>
