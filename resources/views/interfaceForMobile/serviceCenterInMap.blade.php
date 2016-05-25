@extends('layout/defaultlayout')

@section('content')
    <div id="mapComplete">
        {{-- Visualizamos todos los  servicentros registrados --}}
    </div>
@endsection

@section('scriptForMap')
    <script src="{{ asset('assets/googleMaps/mapComplete.js') }}"></script>
@endsection