@extends('layout/masterlayout')

@section('content')
    <div ng-controller="serviceCenterCrtl">
        <div class="row">
            <div class="col s12 m10 offset-m1 center-align">
                <div class="row">
                    <p>@{{ "servicentros" | uppercase }}<strong class="text-primary">@{{ "VALVOLINE" | uppercase }}</strong></p>
                    <div class="divider"></div>
                </div>
                <div class="row">
                    <div class="col s12 m8">
                        <form>
                            <div class="input-field">
                                <input id="search" type="search" ng-model="busqueda" required>
                                <label for="search"><i class="material-icons">search</i></label>
                                <i class="material-icons">close</i>
                            </div>
                        </form>
                    </div>
                    <div class="col s12 m4">
                        <div>
                            <br>
                            <a class="btn waves waves-effect blue-grey" href="{{ route('createServiceCenter') }}">Crear SV</a>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
        </div>
        <div class="col s12 center-align">
            <table class="bordered striped highlight responsive-table">
                <thead>
                <tr>
                    <th><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">Nombre</a></th>
                    <th><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">Propietario</a></th>
                    <th><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">Contrato vence</a></th>
                    <th><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">Pais</a></th>
                    <th><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">Provincia</a></th>
                    <th><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">Ciudad</a></th>
                    <th><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">Estado</a></th>
                    <th><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">Editar</a></th>
                    <th><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">Eliminar</a></th>
                </tr>
                </thead>
                <tbody>
                <tr ng-repeat="center in serviceCenters | filter: busqueda | orderBy:'item':bandOrdenar">
                    <td>@{{ center.nombre }}</td>
                    <td>@{{ center.propietario }}</td>
                    <td>@{{ center.contrato_vence }}</td>
                    <td>@{{ center.country_name }}</td>
                    <td>@{{ center.province_name }}</td>
                    <td>@{{ center.city_name }}</td>
                    <td>@{{ center.estado }}</td>
                    <td><a href="#" class="btn waves waves-effect  light-green accent-4"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><a href="#" class="btn waves waves-effect red"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection