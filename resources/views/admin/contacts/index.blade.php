@extends('layout/masterlayout')

@section('content')
    <div class="row" ng-controller="serviceCenterCrtl">
        <div class="col s12">
            <div class="row">
                <div class="col s12 m10 offset-m1 center-align">
                    <div class="row">
                        <p>@{{ "lista" | uppercase }}<strong class="text-primary">@{{ "contactos" | uppercase }}</strong></p>
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
                                <a class="btn waves waves-effect blue-grey" href="{{ route('createContact') }}">Crear Contacto</a>
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
                            <td><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">Servicenter</a></td>
                            <td><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">Nombre</a></td>
                            <td><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">Celular</a></td>
                            <td><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">E-mail</a></td>
                            <td><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">Editar</a></td>
                            <td><a class="pointer" ng-click="bandOrdenar = !bandOrdenar">Eliminar</a></td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat="contact in contacts | filter: busqueda | orderBy:'item':bandOrdenar">
                            <td>@{{ contact.nombre }}</td>
                            <td>@{{ contact.contact_name }}</td>
                            <td>@{{ contact.cell }}</td>
                            <td>@{{ contact.email }}</td>
                            <td><a href="#" class="btn waves waves-effect  light-green accent-4"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                            <td>
                                <button type="submit" class="btn waves waves-effect red"><i class="fa fa-trash-o" aria-hidden="true"></i></button>

                                {{--
                                <form ng-attr-action="@{{ rutaDelete+contact.id }}" method="delete">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn waves waves-effect red"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </form>
                                --}}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection