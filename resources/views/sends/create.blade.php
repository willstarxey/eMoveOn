@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Datos de Envío</div>
                    <div class="card-body">
                        @include('sends.partials.form')
                        {!! Form::open(['route' => 'sends.store']) !!}
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Mapa</div>
                    <div class="card-body">
                        <div class="form-group row align-items-center justify-content-center">
                            <label class="col-md-2">Lugar de Remitente: </label>
                            <input type="text" id="remitente" class="form-control col-3">
                            <label class="col-md-2">Lugar de Entrega: </label>
                            <input type="text" id="destino" class="form-control col-3">
                        </div>
                        <hr>
                        {!!$directions['js']!!}
                        {!!$directions['html']!!}
                        <div id="directionsId"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection