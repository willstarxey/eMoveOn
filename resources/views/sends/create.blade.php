@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Datos de Envío</div>
                    <div class="card-body">
                        @include('sends.partials.error')
                        {!! Form::open(['route' => 'sends.checksend']) !!}
                        @include('sends.partials.form')
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="row align-items-center card-header col-md-12">
                        <p class="col-md-2 p-no-rem">Mapa</p>
                        <p class="col-md-3 p-no-rem" id="tiempo" for="tiempo"></p>
                        <p class="row col-md-4 p-no-rem justify-content-center" id="distancia" for="distancia">Click al mapa para actualizar</p>
                        <p class="col-md-3 p-no-rem" id="pago" for="pago"></p>
                    </div>
                    <div class="card-body">
                        <div id="map"></div>
                    </div>
                </div>
                <script type="text/javascript" src="/js/mapa.js"></script>
                <script async defer src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAPS_API_KEY')}}&callback=initMap"></script>
            </div>
        </div>
    </div>
@endsection