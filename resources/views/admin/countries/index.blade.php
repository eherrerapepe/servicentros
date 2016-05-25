@extends('layout/masterlayout')

@section('content')
    <div class="row" ng-controller="countryCrtl">

        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#createCountry">Pais</a></li>
                <li class="tab col s3"><a href="#createProvince">Provincia</a></li>
                <li class="tab col s3"><a href="#createCity">Ciudad</a></li>
            </ul>
        </div>

        <div id="createCountry" class="col s12">
            <div class="row">
                <div class="col s12 m10 offset-m1 center-align">
                    <div class="row">
                        <p>@{{ "lista" | uppercase }}<strong class="text-primary">@{{ "paises" | uppercase }}</strong></p>
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
                                <a class="btn waves waves-effect blue-grey" href="{{ route('createCountry') }}">Registar País</a>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m10 offset-m1 center-align">
                    <table class="bordered striped highlight">
                        <thead>
                        <tr>
                            <td><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">País</a></td>
                            <td><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">Editar</a></td>
                            <td><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">Eliminar</a></td>
                        </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="country in countries | filter: busqueda | orderBy:'item':bandOrdenar">
                                <td>@{{ country.country_name }}</td>
                                <td><a href="#" class="btn waves waves-effect  light-green accent-4"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                <td><a href="#" class="btn waves waves-effect red"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>{{-- Fin del registro de un nuevo pais --}}

        <div id="createProvince" class="col s12">
            <div class="row">
                <div class="col s12 m10 offset-m1 center-align">
                    <div class="row">
                        <p>@{{ "lista" | uppercase }}<strong class="text-primary">@{{ "provincias" | uppercase }}</strong></p>
                        <div class="divider"></div>
                    </div>
                    <div class="row">
                        <div class="col s12 m8">
                            <form>
                                <div class="input-field">
                                    <input id="search" type="search" ng-model="busquedaProvince" required>
                                    <label for="search"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                            </form>
                        </div>
                        <div class="col s12 m4">
                            <div>
                                <br>
                                <a class="btn waves waves-effect blue-grey" href="{{ route('createProvince') }}">Registar Provincia</a>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>
            </div>
            <div class="col s12 center-align">
                <table class="bordered striped highlight">
                    <thead>
                    <tr>
                        <td><a class="pointer" ng-click="banProv = !banProv">Provincia</a></td>
                        <td><a class="pointer" ng-click="banProv = !banProv">Editar</a></td>
                        <td><a class="pointer" ng-click="banProv = !banProv">Eliminar</a></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat="province in provinces | filter: busquedaProvince | orderBy:'itemProv':banProv">
                        <td>@{{ province.province_name }}</td>
                        <td><a href="#" class="btn waves waves-effect  light-green accent-4"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                        <td><a href="#" class="btn waves waves-effect red"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>{{-- Fin del registro de una nueva provincia --}}
        <div id="createCity" class="col s12">
            <div class="row">
                <div class="col s12 m10 offset-m1 center-align">
                    <div class="row">
                        <p>@{{ "lista" | uppercase }}<strong class="text-primary">@{{ "ciudades" | uppercase }}</strong></p>
                        <div class="divider"></div>
                    </div>
                    <div class="row">
                        <div class="col s12 m8">
                            <form>
                                <div class="input-field">
                                    <input id="search" type="search" ng-model="flagCity" required>
                                    <label for="search"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                            </form>
                        </div>
                        <div class="col s12 m4">
                            <div>
                                <br>
                                <a class="btn waves waves-effect blue-grey" href="{{ route('createCity') }}">Registar Ciudad</a>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>
            </div>
            <div class="col s12 center-align">
                <table class="bordered striped highlight">
                    <thead>
                    <tr>
                        <td><a class="pointer" ng-click="banCity = !banCity">Ciudad</a></td>
                        <td><a class="pointer" ng-click="banCity = !banCity">Editar</a></td>
                        <td><a class="pointer" ng-click="banCity = !banCity">Eliminar</a></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat="city in cities | filter: flagCity | orderBy:'itemCity':banCity">
                        <td>@{{ city.city_name }}</td>
                        <td><a href="#" class="btn waves waves-effect  light-green accent-4"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                        <td><a href="#" class="btn waves waves-effect red"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>{{-- Fin del registro de una nueva ciudad --}}
    </div>
@endsection