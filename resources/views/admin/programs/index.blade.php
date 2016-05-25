@extends('layout/masterlayout')

@section('content')
    <div ng-controller="countryCrtl">
        <div class="row">
            <div class="col s12 m10 offset-m1 center-align">
                <div class="row">
                    <p>@{{ "lista" | uppercase }}<strong class="text-primary">@{{ "programas" | uppercase }}</strong></p>
                    <div class="divider"></div>
                </div>
                <div class="row">
                    <div class="col s12 m8">
                        <form>
                            <div class="input-field">
                                <input id="search" type="search" ng-model="busquedaProgram" required>
                                <label for="search"><i class="material-icons">search</i></label>
                                <i class="material-icons">close</i>
                            </div>
                        </form>
                    </div>
                    <div class="col s12 m4">
                        <div>
                            <br>
                            <a class="btn waves waves-effect blue-grey" href="{{ route('createProgram') }}">Registar Programa</a>
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
                    <td><a class="pointer" ng-click="banProg = !banProg">Programa</a></td>
                    <td><a class="pointer" ng-click="banProg = !banProg">Editar</a></td>
                    <td><a class="pointer" ng-click="banProg = !banProg">Eliminar</a></td>
                </tr>
                </thead>
                <tbody>
                <tr ng-repeat="program in programs | filter: busquedaProgram | orderBy:'itemProg':banProg">
                    <td>@{{ program.program_name }}</td>
                    <td><a href="#" class="btn waves waves-effect  light-green accent-4"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><a href="#" class="btn waves waves-effect red"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection