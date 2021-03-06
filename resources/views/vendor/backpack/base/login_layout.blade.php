<!DOCTYPE html>
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    @yield('before_styles')

    <!--Favicon-->
    <link rel="icon" type="image/png" href="/img/laravpolls_icon.png"/>

    <!-- Stylesheets
        ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/vendor/canvas/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="/vendor/canvas/css/style.css" type="text/css"/>
    <link rel="stylesheet" href="/vendor/canvas/css/swiper.css" type="text/css"/>
    <link rel="stylesheet" href="/vendor/canvas/css/dark.css" type="text/css"/>
    <link rel="stylesheet" href="/vendor/canvas/css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="/vendor/canvas/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="/vendor/canvas/css/magnific-popup.css" type="text/css"/>
    <link rel="stylesheet" href="/vendor/canvas/css/custom.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/vendor/canvas/css/normalize.css"/>
    <link rel="stylesheet" href="/vendor/canvas/css/responsive.css" type="text/css"/>
    <link rel="stylesheet" href="/vendor/canvas/css/font-awesome/css/font-awesome.min.css">


    <link rel="stylesheet" href="{{ asset('vendor/adminlte/') }}/dist/css/AdminLTE.min.css">

    <title>
        {{ isset($title) ? $title : config('backpack.base.project_name') }}
    </title>

</head>
<body class="stretched">
<div id="wrapper" class="clearfix" style="animation-duration: 1.5s; opacity: 1;">
    <header id="header">
        @include('backpack::inc.login_header')
    </header>
    @yield('content')

    <footer id="footer" class="dark">
        @include('backpack::inc.footer')
    </footer><!-- #footer end -->
</div>

<!-- ./wrapper -->

@yield('before_scripts')
<!-- jQuery 2.2.0 -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('vendor/adminlte') }}/plugins/jQuery/jQuery-2.2.0.min.js"><\/script>')</script>
<!-- Bootstrap 3.3.5 -->
<script src="{{ asset('vendor/adminlte') }}/bootstrap/js/bootstrap.min.js"></script>

@yield('after_scripts')

<!-- JavaScripts -->
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
<!-- External JavaScripts
============================================= -->
<script src="/vendor/canvas/js/modernizr.custom.js"></script>
<script type="text/javascript" src="/vendor/canvas/js/jquery.js"></script>
<script type="text/javascript" src="/vendor/canvas/js/plugins.js"></script>
<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="/vendor/canvas/js/functions.js"></script>
</body>
</html>