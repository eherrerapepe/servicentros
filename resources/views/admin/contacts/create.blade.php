@extends('layout/masterlayout')

@section('content')
    <div class="row">
        @include('partials/errors')
    </div>
    <div class="row">
        <div class="col s12 m10 offset-m1 center-align">
            <h5>Registrar un Contcato</h5>
            <div class="divider"></div>
        </div>
    </div>
    <div class="row">

        <form method="POST" class="col s12 m10 offset-m1" action="{{ route('saveContact') }}">

            {{ csrf_field() }}

            <div class="row">
                <div class="input-field col s12 m6">
                    <select id="serviceCenter_id" name="service_center_id">
                        @foreach($serviceCenters as $serviceCenter)
                            <option value="{{ $serviceCenter->id }}">{{ $serviceCenter->nombre }}</option>
                        @endforeach
                    </select>
                    <label for="serviceCenter_id">Seleccione un Centro de Servicio</label>
                </div>
                <div class="input-field col s12 m6">
                    <input type="text" id="contactName" name="contact_name">
                    <label for="contactName">Nombre de Contacto: </label>
                </div>

                <div class="input-field col s12 m6">
                    <input type="text" id="cell" name="cell">
                    <label for="cell">Celular: </label>
                </div>
                <div class="input-field col s12 m6">
                    <input type="text" id="e-mail" name="email">
                    <label for="e-mail">Correo: </label>
                </div>
            </div>
            <div class="row">
                <div class="input-field center-align s12">
                    <button type="submit" class="btn waves waves-effect blue">Registrar</button>
                </div>
            </div>
        </form>
    </div>
@endsection