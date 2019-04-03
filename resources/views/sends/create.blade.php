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
                    <div class="row card-header col-md-12">
                        <b class="col-md-2">Mapa</b>
                        <b class="col-md-3"><p id="tiempo" for="tiempo"></p></b>
                        <b class="row col-md-3"><p id="distancia" for="distancia"></p></b>
                        <b class="col-md-3"><p id="pago" for="pago"></p></b>
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