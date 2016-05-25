@extends('layout/masterlayout')

@section('content')
    <div>
        <div class="row">
            @include('partials/errors')
        </div>
        <div class="row center-align">
            <p>@{{ "registrar" | uppercase }}<strong class="text-primary">@{{ "servicentro" | uppercase }}</strong></p>
            <div class="divider"></div>
        </div>
        <div class="row">

            <div class="col s12 m10 offset-m1">
                <form method="POST" action="{{ route('saveServiceCenter') }}" accept-charset="UTF-8" enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <div class="row">
                        <div class=" input-field col s12 m6">
                            <select id="country_id" name="country_id">
                                <option value="" disabled selected>Seleccione un País: </option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->country_id }}">{{ $country->country_name }}</option>
                                @endforeach
                            </select>
                            <label for="country_id">País:</label>
                        </div>

                        <div class="input-field col s12 m6">
                            <select id="province_id" name="province_id">
                                <option value="" disabled selected>Seleccione una Provincia:</option>
                                @foreach($provinces as $province)
                                    <option value="{{ $province->province_id }}">{{ $province->province_name }}</option>
                                @endforeach
                            </select>
                            <label for="province_id">Provincia:</label>
                        </div>

                        <div class="input-field col s12 m6">
                            <select id="city_id" name="city_id">
                                <option value="" disabled selected>Seleccione una Ciudad:</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->city_id }}">{{ $city->city_name }}</option>
                                @endforeach
                            </select>
                            <label for="city_id">Ciudad: </label>
                        </div>

                        <div class="input-field col s12 m6">
                            <select id="program_id" name="program_id">
                                <option value="" disabled selected>Seleccione un programa</option>
                                @foreach($programs as $program)
                                    <option value="{{ $program->program_id }}">{{ $program->program_name }}</option>
                                @endforeach
                            </select>
                            <label for="program_id">Programa: </label>
                        </div>

                        <div class="input-field col s12 m6">
                            <input type="text" id="nombre" name="nombre" {{ old('nombre') }}>
                            <label for="nombre">Nombre: </label>
                        </div>

                        <div class="input-field col s12 m6">
                            <input type="text" id="propietario" name="propietario">
                            <label for="propietario">Propietario: </label>
                        </div>

                        <div class="input-field col s12 m6">
                            <input type="text" id="direccion" name="direccion">
                            <label for="direccion">Dirección: </label>
                        </div>

                        <div class="input-field col s12 m6">
                            <input type="date" class="datepicker" id="contrato_vence" name="contrato_vence">
                            <label for="contrato_vence">Contrato Vence: </label>
                        </div>

                        <div class="input-field col s12 m6">
                            <input type="text" id="telefono1" name="telefono1">
                            <label for="telefono1">Telefono: </label>
                        </div>

                        <div class="input-field col s12 m6">
                            <input type="text" id="telefono2" name="telefono2">
                            <label for="telefono2">Telefono 2: </label>
                        </div>

                        <div class="col s12 m6">
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="text" id="latitud" class="latitude_map" name="latitud" placeholder="Ejemplo - lat: -34.397 ">
                                    <label for="latitud">Latitud: </label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" id="longitud" class="longitude_map" name="longitud" placeholder="Ejemplo - lng: 150.644 ">
                                    <label for="longitud">Longitud: </label>
                                </div>
                                <div class="file-field input-field col s12">
                                    <div class="btn waves waves-effect light-green accent-4">
                                        <span>Foto 1</span>
                                        <input type="file" name="foto_1">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" name="foto_1">
                                    </div>
                                </div>
                                <div class="file-field input-field col s12">
                                    <div class="btn waves waves-effect light-green accent-4">
                                        <span>Foto 2</span>
                                        <input type="file" name="foto_2">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" name="foto_2">
                                    </div>
                                </div>
                                <div class="file-field input-field col s12">
                                    <div class="btn waves waves-effect light-green accent-4">
                                        <span>Foto 3</span>
                                        <input type="file" name="foto_3">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" name="foto_3">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m6">
                            <div class="input-field center-align col s12">
                                <button type="button" onclick="miUbicacion();" class="btn btn-sm waves waves-effect blue-grey">Mi Ubicación</button>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <small>Vizualizacion</small>
                                    <div class="divider"></div>
                                    <div id="viewMapMiUbicacion"></div>
                                </div>
                            </div>
                        </div>{{-- Cargamos el mapa o cargamos la ubicacion --}}


                        <div class="input-field center-align col s12">
                            <button type="submit" class="btn waves waves-effect blue">Registrar</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection