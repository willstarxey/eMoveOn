@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Datos de Envío</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Nombre del destinatario') }}</label>
                            <div class="col-md-6">
                                <input id="dest" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Peso') }}</label>
                            <div class="col-md-6">
                                <input id="peso" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Dimensiones') }}</label>
                            <div class="col-md-6">
                                <input id="dimen" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Costo') }}</label>
                            <label class="col-md-4 col-form-label text-md-right">{{ __('$50.00 MXN') }}</label>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar') }}
                                </button>
                            </div>
                        </div>
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