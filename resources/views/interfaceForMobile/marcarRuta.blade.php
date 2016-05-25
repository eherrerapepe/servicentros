@extends('layout/defaultlayout')

@section('content')
<div class="row">
    <input id="latitude" type="hidden" value="{{ $latitude->latitud }}">
    <input id="longitude" type="hidden" value="{{ $longitud->longitud }}">
    <div id="mapComplete"></div>{{-- Mapa con la ruta marcada desde hasta --}}
</div>
@endsection

@section('scriptForMap')
    <script src="{{ asset('assets/googleMaps/mapMarcarRuta.js') }}"></script>
@endsection