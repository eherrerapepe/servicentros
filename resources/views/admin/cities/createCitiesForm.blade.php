@extends('layout/masterlayout')

@section('content')
    <div class="row">
        @include('partials/errors')
    </div>
    <div class="row">
        <div class="col s12 m10 offset-m1 center-align">
            <h5>Registrar una Ciudad</h5>
            <div class="divider"></div>
        </div>
    </div>
    <div class="row">

        <form method="POST" class="col s12 m10 l6 offset-m1 offset-l3" action="{{ route('saveCity') }}">

            {{ csrf_field() }}

            <div class="row">
                <div class="input-field">
                    <select id="province_id" name="province_id">
                        @foreach($provincies as $province)
                            <option value="{{ $province->id }}">{{ $province->province_name }}</option>
                        @endforeach
                    </select>
                    <label for="province_id">Seleccione un Provincia</label>
                </div>
                <div class="input-field">
                    <input type="text" id="city" name="city_name">
                    <label for="city">Nombre de la ciudad: </label>
                </div>
                <div class="input-field center-align">
                    <button type="submit" class="btn waves waves-effect blue">Registrar</button>
                </div>
            </div>
        </form>
    </div>
@endsection