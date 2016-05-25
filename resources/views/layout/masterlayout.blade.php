<!DOCTYPE html>
<html lang="es" ng-app="servicentrosValvoline">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Servicentros | valvoline</title>

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('assets/materialize/css/normalize.css') }}">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="{{ asset('assets/materialize/css/materialize.min.css') }}">

    <!-- Material Design Iconic Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/materialize/css/font-awesome.min.css') }}">

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Malihu jQuery custom content scroller CSS -->
    <link rel="stylesheet" href="{{ asset('assets/materialize/css/jquery.mCustomScrollbar.css') }}">

    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="{{ asset('assets/materialize/css/sweetalert.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/materialize/css/style.css') }}">

</head>
<body ng-controller="mainCtrl">

{{-- Nav Lateral --}}
@include('partials/nav')

{{-- Page content  --}}
<section class="ContentPage full-width">

    {{-- Nav Info --}}
    @include('partials/nav_bar_info')

    {{-- Notifications area --}}
    @include('partials/notification')

    <div class="row">
        @yield('content')
    </div>

    {{-- Footer
    @include('partials/footer')--}}

</section>

<!-- Sweet Alert JS -->
<script src="{{ asset('assets/materialize/js/sweetalert.min.js') }}"></script>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('assets/materialize/js/jquery-2.2.0.min.js') }}"><\/script>')</script>

<!-- Materialize JS -->
<script src="{{ asset('assets/materialize/js/materialize.min.js') }}"></script>

<!-- Malihu jQuery custom content scroller JS -->
<script src="{{ asset('assets/materialize/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/materialize/js/main.js') }}"></script>

{{-- Libreria chart.js --}}
<script src="{{ asset('assets/ChartSet/Chart.min.js') }}"></script>

{{-- AngularJs --}}
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
<script src="https://code.angularjs.org/1.5.5/angular-route.js"></script>

{{-- Cargamos nuetro codigo principal de angular --}}
<script src="{{ asset('assets/angular/app.js') }}"></script>
{{-- Cargamos los diferentes controladores --}}
<script src="{{ asset('assets/angular/countryCtrl.js') }}"></script>
<script src="{{ asset('assets/angular/serviceCenterCtrl.js') }}"></script>
{{-- <script src="{{ asset('assets/angular/materialSelect.js') }}"></script> --}}

{{-- Graficas --}}
<script src="{{ asset('assets/angular/graficas.js') }}"></script>

{{-- Integramos google maps --}}
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB7knr59gRMDxo_VtZbt3xSx1x3e5j35M8"></script>
<script src="{{ asset('assets/googleMaps/map.js') }}"></script>


</body>
</html>