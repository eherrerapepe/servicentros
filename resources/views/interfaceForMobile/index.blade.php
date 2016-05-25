@extends('layout/defaultlayout')

@section('content')
    <div class="row border-top" ng-controller="mainMobileCtrl">
        <div class="col s12 cnt-opc-search">
            <div class="row">
                <div class="col s2">
                    <br>
                    <i class="fa fa-search fa-2x" aria-hidden="true"></i>
                </div>
                <div class="col s10">
                    <div class="input-field">
                        <input id="search" type="search" ng-model="busqueda" placeholder="Ingrese su busqueda" required>
                        <i class="material-icons">close</i>
                    </div>
                </div>
            </div>
        </div> {{-- Contenedor del buscador --}}
        <div class="col s12 center-align">
            <img src="{{ asset('assets/materialize/img/Valvoline-raceway-Signage1.jpg') }}" class="responsive-img">
        </div>{{-- Contenedor del banner --}}
        <div class="col s12 center-align">
            <table class="bordered striped highlight">
                <thead>
                <tr>
                    <th><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">Center</a></th>
                    <th><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">País</a></th>
                    <th><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">Provincia</a></th>
                    <th><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">Ciudad</a></th>
                    <th><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">Direccion</a></th>
                </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="center in serviceCentersMobile | filter: busqueda | orderBy:'item':bandOrdenar">
                        <td><a href="serviceDetail/@{{ center.id }}">@{{ center.nombre }}</a></td>
                        <td>@{{ center.country_name }}</td>
                        <td>@{{ center.province_name }}</td>
                        <td>@{{ center.city_name }}</td>
                        <td>@{{ center.direccion }}</td>
                    </tr>
                </tbody>
            </table>
        </div>{{-- Contenedor de las lista de servicentros registrados --}}

        {{-- Boton de geolocalizacion --}}
        <div class="fixed-action-btn horizontal" style="bottom: 10px; right: 10px;">
            <a href="/listCenterMobileInMap/" class="btn-floating btn-large red"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
        </div>
    </div>
@endsection