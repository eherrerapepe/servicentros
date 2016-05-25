@extends('layout/masterlayout')

@section('content')
    <div>
        <div class="row"></div>{{-- Contenedor para los 10 servicentros más visitados --}}
        <div class="row">
            <div class="col s12 l8">
                <canvas id="graphicBar"></canvas>
            </div>{{-- Gráficas de barras --}}
            <div class="col s12 l8"></div>{{-- Alertas --}}
        </div>{{-- Contenedor para el grafico de barras y los alertas --}}
        <div class="row"></div>{{-- Contenedor para las gráficas estadisticas --}}
        <div class="row"></div>{{-- Contenedor para el mapa con todos los cervicentros registrados --}}
    </div>
@endsection