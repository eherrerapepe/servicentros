@extends('layout/masterlayout')

@section('content')
    <div class="row">
        @include('partials/errors')
    </div>
    <div class="row">
        <div class="col s12 m10 offset-m1 center-align">
            <h5>Registrar un país</h5>
            <div class="divider"></div>
        </div>
    </div>
    <div class="row">

        <form method="POST" class="col s12 m10 l6 offset-m1 offset-l3" action="{{ route('saveCountry') }}">

            {{ csrf_field() }}

            <div class="row">
                <div class="input-field">
                    <input type="text" id="country" name="country_name">
                    <label for="country">Nombre del País: </label>
                </div>
                <div class="input-field center-align">
                    <button type="submit" class="btn waves waves-effect blue">Registrar</button>
                </div>
            </div>
        </form>
    </div>
@endsection