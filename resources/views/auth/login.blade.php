@extends('layout/defaultlayout')

@section('content')
    <div class="row center-align">
        <div class="col s6 m6 l2 offset-s3 offset-m3 offset-l5">
            <br><br><br>
            <img class="responsive-img" src="{{ asset('assets/materialize/img/Valvoline-Logo.png') }}" alt="Servicentros Valvoline">
        </div>
        <div class="col s12 m10 offset-m1">
            <div class="divider"></div>
            <br><br>
        </div>
    </div>
    <div class="row">
        {{-- Apartado para mostrar los errores en pantalla --}}
        @include('partials/errors')
    </div>
    <div class="row">
        <div class="col s12 m8 l6 offset-m2 offset-l3 white z-depth-1 circle-login">
            <form class="col s12 l10 offset-l1"  method="post" action="{{ route('loginPost') }}">
                {!! csrf_field() !!}
                <br>
                <div class="row">
                    <div class="input-field">
                        <div class="col s11">
                            <input id="user" type="text" name="username" value="{{ old('username') }}" placeholder="Ingrese su nombre de usuario">
                            <label for="user" class="right-align">Usuario: </label>
                        </div>
                        <div class="col s1">
                            <i class="fa fa-user-secret fa-2x" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <div class="col s11">
                            <input id="password" type="password" name="password" placeholder="Ingrese su contraseña">
                            <label for="password">Contraseña: </label>
                        </div>
                        <div class="col s1">
                            <i class="fa fa-key fa-2x" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field center-align">
                        <button type="submit" class="btn waves waves-effect blue-grey">Iniciar Sesión</button>
                    </div>
                </div>
                <div class="row">
                    <a href="{{ url('password/email') }}">Recuperar Contraseña</a>
                </div>
            </form>
        </div>
    </div>
@endsection