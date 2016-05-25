<!DOCTYPE html>
<html lang="es" ng-app="angularMobile">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Servicentros | valvoline</title>

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('assets/materialize/css/normalize.css') }}">

    <!-- Materialize CSS -->
    <link rel="stylesheet" href="{{ asset('assets/materialize/css/materialize.min.css') }}">

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Material Design Iconic Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/materialize/css/font-awesome.min.css') }}">

    <!-- Malihu jQuery custom content scroller CSS -->
    <link rel="stylesheet" href="{{ asset('assets/materialize/css/jquery.mCustomScrollbar.css') }}">

    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="{{ asset('assets/materialize/css/sweetalert.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/materialize/css/styleUser.css') }}">
</head>
<body>

    {{-- Page content  --}}
    <div class="row">
        @yield('content')
    </div>

    <!-- Sweet Alert JS -->
    <script src="{{ asset('assets/materialize/js/sweetalert.min.js') }}"></script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('assets/materialize/js/jquery-2.2.0.min.js') }}"><\/script>')</script>

    <!-- Materialize JS -->
    <script src="{{ asset('assets/materialize/js/materialize.min.js') }}"></script>

    {{-- AngularJs --}}
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
    <script src="https://code.angularjs.org/1.5.5/angular-route.js"></script>

    {{-- Cargamos nuetro codigo principal de angular --}}
    <script src="{{ asset('assets/angular/mainAngularMobile.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/materialize/js/mainUser.js') }}"></script>
    {{-- Integramos google maps --}}
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB7knr59gRMDxo_VtZbt3xSx1x3e5j35M8"></script>
    <script src="{{ asset('assets/googleMaps/map.js') }}"></script>
    @yield('scriptForMap')
</body>
</html>