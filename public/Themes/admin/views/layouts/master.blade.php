<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('warriorcms.website_name') }} @yield('title')</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ Theme::assets('plugins/fontawesome-free/css/all.min.css') }}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ Theme::assets('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ Theme::assets('css/adminlte.min.css') }}">
    </head>
    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

        <x-admin::menu />
        <x-admin::sidebar />
        @yield('content')
        <x-admin::footer />
        @include('sweetalert::alert')
        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="{{ Theme::assets('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ Theme::assets('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ Theme::assets('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ Theme::assets('js/adminlte.js') }}"></script>

        <!-- PAGE PLUGINS -->
        <!-- jQuery Mapael -->
        <script src="{{ Theme::assets('plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
        <script src="{{ Theme::assets('plugins/raphael/raphael.min.js') }}"></script>
        <script src="{{ Theme::assets('plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
        <script src="{{ Theme::assets('plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>

        <!-- ChartJS -->
        <script src="{{ Theme::assets('plugins/chart.js/Chart.min.js') }}"></script>
    </body>
</html>
