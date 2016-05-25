@extends('layout/defaultlayout')

@section('content')
    <div class="row center-align">
        <div class="col s6 offset-s3">
            <img src="{{ asset('assets/materialize/img/Valvoline-Logo.png') }}" class="responsive-img">
            <br><br>
            <br><br>
        </div>
        <div class="col s12">
            @if(Auth::user())
                <a href="/admin">Admin</a>
            @else
                <a href="/login">Iniciar Sesión</a>
            @endif
            |
            <a href="/mobile">Front Mobile</a>
        </div>
    </div>
@endsection