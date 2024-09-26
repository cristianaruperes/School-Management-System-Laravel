<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Test School</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ url('/assets/backend/favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('/assets/backend/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('/assets/backend/plugins/node-waves/waves.css') }}" rel="stylesheet"/>

    <!-- Animation Css -->
    <link href="{{ asset('/assets/backend/plugins/animate-css/animate.css') }}" rel="stylesheet"/>

    <!-- Morris Chart Css-->
    <link href="{{ asset('/assets/backend/plugins/morrisjs/morris.css') }}" rel="stylesheet"/>

     <!-- Bootstrap Select Css -->
    <link href="{{ asset('/assets/backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet"/>

    <!-- Custom Css -->
    <link href="{{ asset('/assets/backend/css/style.css') }}" rel="stylesheet"/>

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('/assets/backend/css/themes/all-themes.css') }}" rel="stylesheet"/>

    <!-- JQuery DataTable Css -->
    <link href="{{ asset('/assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

</head>

<body class="theme-orange">
   
    @include('layoutbackend.main_header')

    @include('layoutbackend.main_sidebar')

    @include('layoutbackend.main_control_sidebar')

    @include('layoutbackend.main_wrapper')


     <!-- Jquery Core Js -->
    <script src="{{ asset('/assets/backend/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('/assets/backend/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ asset('/assets/backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('/assets/backend/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('/assets/backend/plugins/node-waves/waves.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('/assets/backend/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ asset('/assets/backend/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('/assets/backend/plugins/morrisjs/morris.js') }}"></script>

    <!-- ChartJs -->
    <script src="{{ asset('/assets/backend/plugins/chartjs/Chart.bundle.js') }}"></script>

     <!-- Select Plugin Js -->
    <script src="{{ asset('/assets/backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ asset('/assets/backend/plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('/assets/backend/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('/assets/backend/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('/assets/backend/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('/assets/backend/plugins/flot-charts/jquery.flot.time.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('/assets/backend/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('/assets/backend/js/admin.js') }}"></script>
    <script src="{{ asset('/assets/backend/js/pages/index.js')}}"></script>
     <script src="{{ asset('/assets/backend/js/pages/tables/jquery-datatable.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{ asset('/assets/backend/js/demo.js') }}"></script>

    <script src="{{ asset('/assets/backend/js/pages/forms/basic-form-elements.js') }}"></script>

</body>

</html>





