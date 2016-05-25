@extends('layout/masterlayout')

@section('content')
    <div class="row">
        @include('partials/errors')
    </div>
    <div class="row">
        <div class="col s12 m10 offset-m1 center-align">
            <h5>Registrar una Provincia</h5>
            <div class="divider"></div>
        </div>
    </div>
    <div class="row">

        <form method="POST" class="col s12 m10 l6 offset-m1 offset-l3" action="{{ route('saveProvince') }}">

            {{ csrf_field() }}

            <div class="row">
                <div class="input-field">
                    <select id="country_id" name="country_id">
                        @foreach($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                        @endforeach
                    </select>
                    <label for="country_id">Seleccione un País</label>
                </div>
                <div class="input-field">
                    <input type="text" id="province" name="province_name">
                    <label for="province">Nombre de la provincia: </label>
                </div>
                <div class="input-field center-align">
                    <button type="submit" class="btn waves waves-effect blue">Registrar</button>
                </div>
            </div>
        </form>
    </div>
@endsection