@extends('layout/defaultlayout')

@section('content')
    <div class="row border-top" ng-controller="mainMobileCtrl">
        {{--<div class="col s12 cnt-opc-search">
            <div class="row">
                <div class="col s2">
                    <br>
                    <i class="fa fa-search fa-2x" aria-hidden="true"></i>
                </div>
                <div class="col s10">
                    <div class="input-field">
                        <input id="search" type="search" ng-model="busqueda" placeholder="Ingrese su busqueda" required>
                        <i class="material-icons">close</i>
                    </div>
                </div>
            </div>
        </div>  Contenedor del buscador --}}
        <div class="col s12 center-align margin-top">
            <img src="{{ asset('assets/materialize/img/Valvoline-raceway-Signage1.jpg') }}" class="responsive-img">
        </div>{{-- Contenedor del banner --}}
        <div class="col s12">
            <div class="row">
                <div class="col s12">
                    <h5 class="blue-text">{{ $serviceCenter->nombre }}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6">
                    <p><span class="blue-text">Dirección:</span> {{ $serviceCenter->direccion }}</p>
                    <p><span class="blue-text">Telefono:</span> {{ $serviceCenter->telefono1 }}</p>
                    <div class="divider"></div>
                </div>

                {{-- Contacts --}}
                <div class="row center-align">
                    <div class="col s12 left-align">
                        <h5 class="blue-text">Contactos:</h5>
                    </div>
                    @foreach($contacts as $contact)
                        <div class="col s6 m6">
                            <br>
                            <a class="waves-effect waves-light btn modal-trigger blue" href="#{{ $contact->id }}">contacto {{ $contact->id }}</a>

                            <!-- Modal Structure -->
                            <div id="{{ $contact->id }}" class="modal">
                                <div class="modal-content">
                                    <h5>{{ $serviceCenter->nombre }}</h5>
                                    <p class="blue-text">Contacto:</p>
                                    <p>{{ $contact->contact_name }}</p>
                                    <p class="blue-text">Celular:</p>
                                    <p>{{ $contact->cell }}</p>
                                    <p class="blue-text">E-mail:</p>
                                    <p>{{ $contact->email }}
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>{{-- Contenedor ver el detalle del servicentro --}}
        <div class="col s10 offset-s1 over-flow">
            <div class="row">
                <div class="divider"></div>
                <h6 class="blue-text">Ubicacion Geográfica</h6>
                <input type="hidden" value="{{ $serviceCenter->latitud }}" id="latitud">
                <input type="hidden" value="{{ $serviceCenter->longitud }}" id="longitud">
            </div>
            <div class="row">
                <div id="mapUbCenter"></div>{{-- Aki se carga el mapa --}}
                <div class="col s12 blue cnt-barra-btn-ir">
                    <div class="row">
                        <div class="col s6">
                            <p class="white-text">Descubra como llegar:</p>
                        </div>
                        <div class="col s6 right-align">
                            <a href="/saberComoLlegar/{{ $serviceCenter->id }}" class="btn-floating btn-large red btn-ir"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>{{-- Contenedor para el mapa --}}

        <div class="row">
            <div class="container">
                <h5 class="blue-text">Fotografías:</h5>{{-- contenedor de fotografia --}}
                <div class="divider"></div>
            </div>
        </div>
        <div class="col s12">
            <div class="row">
                <div class="col s4">
                    <div class="row">
                        <div class="col s10 offset-s1">
                            <img src="{{ asset('/storage') }}/{{ $serviceCenter->foto1 }}" class="materialboxed responsive-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="col s4">
                    <div class="row">
                        <div class="col s10 offset-s1">
                            <img src="{{ asset('/storage') }}/{{ $serviceCenter->foto2 }}" class="materialboxed responsive-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="col s4">
                    <div class="row">
                        <div class="col s10 offset-s1">
                            <img src="{{ asset('/storage') }}/{{ $serviceCenter->foto3 }}" class="materialboxed responsive-img" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Boton de geolocalizacion --}}
        <div class="fixed-action-btn horizontal" style="bottom: 10px; right: 10px;">
            <a href="/listCenterMobileInMap" class="btn-floating btn-large red"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
        </div>
    </div>
@endsection

@section('scriptForMap')
    <script src="{{ asset('assets/googleMaps/mapShowCenter.js') }}"></script>
@endsection