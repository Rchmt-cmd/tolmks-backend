<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>BSD Toll</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('apex/img/ico/apple-icon-60.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('apex/img/ico/apple-icon-76.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('apex/img/ico/apple-icon-120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('apex/img/ico/apple-icon-152.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('apex/img/logo_bsd_white') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('apex/img/logo_bsd_white.png') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">

    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('apex/fonts/feather/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('apex/fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('apex/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('apex/vendors/css/perfect-scrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('apex/vendors/css/prism.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('apex/vendors/css/chartist.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('apex/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('apex/vendors/css/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('apex/vendors/css/fullcalendar.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('apex/css/app.css') }}">
    <!-- END APEX CSS-->
    @push('head')
    <!-- BEGIN : Dashboard Realtime JS-->
    <script src="{{ asset('js/realtime/dashboardrealtime.js') }}"></script>
    <!-- END : Dashboard Realtime JS-->
    @endpush
    
    @yield('styles')
</head>

<body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns  navbar-sticky" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
    <div class="wrapper">
        @include('frontend.partials.sidebar')
        @include('frontend.partials.navbar')

        <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper">
                @if(session('message'))
                    <div class="row mb-2">
                        <div class="col-lg-12">
                            <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                        </div>
                    </div>
                @endif
                @if($errors->count() > 0)
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Main content -->
                @yield('content')
                <!-- /.content -->
            </div>
            <!-- BEGIN : Footer-->
        </div>
        

        
    </div>
    
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('apex/vendors/js/core/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('apex/vendors/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('apex/vendors/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('apex/vendors/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('apex/vendors/js/prism.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('apex/vendors/js/jquery.matchHeight-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('apex/vendors/js/screenfull.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('apex/vendors/js/pace/pace.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('apex/vendors/js/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('apex/vendors/js/daterangepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('apex/vendors/js/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('apex/vendors/js/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('apex/js/fullcalendar.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/filter.js') }}" type="text/javascript"></script>
    <!-- END VENDOR JS-->


    <!-- BEGIN APEX JS-->
    <script src="{{ asset('apex/js/app-sidebar.js') }}" type="text/javascript"></script>
    <script src="{{ asset('apex/js/notification-sidebar.js') }}" type="text/javascript"></script>
    <script src="{{ asset('apex/js/customizer.js') }}" type="text/javascript"></script>
    <!-- END APEX JS--> 
    <!-- END PAGE LEVEL JS-->
    @stack('scripts')

</body>

</html>
