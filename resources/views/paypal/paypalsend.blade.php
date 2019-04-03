@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-center justify-content-center">DESCRIPCIÓN DEL PAQUETE</h5>
                    </div>
                    <div class="card-body text-center">
                        {!! Form::open(['route'=>'payment.paypal']) !!}
                        <div class="row col-md-12">
                            <p id="nombreDest" name="nombreDest" class="col-md-6"><b>Nombre de la persona que recibe: </b></p>
                            <input class="form-control col-md-6" type="text" value="{{$send->nombreDest}}" name="nombreDest" id="nombreDest" readonly="readonly">
                        </div>
                        <div class="row col-md-12">
                            <p id="peso" name="peso" class="col-md-6"><b>Peso: </b></p>
                            <input class="form-control col-md-6" type="text" value="{{$send->peso}}KG" name="peso" id="peso" readonly="readonly">
                        </div>
                        <div class="row col-md-12">
                            <p id="dimensiones" name="dimensiones" class="col-md-6"><b>Dimensiones: </b></p>
                            <input class="form-control col-md-6" type="text" value="{{$send->dimensiones}}CM" name="dimensiones" id="dimensiones" readonly="readonly">
                        </div>
                        <div class="row col-md-12">
                            <p id="remitente" name="remitente" class="col-md-6"><b>Remitente: </b></p>
                            <input class="form-control col-md-6" type="text" value="{{$send->remitente}}" name="remitente" id="remitente" readonly="readonly">
                        </div>
                        <div class="row col-md-12">
                            <p id="destino" name="destino" class="col-md-6"><b>Destino: </b></p>
                            <input class="form-control col-md-6" type="text" value="{{$send->destino}}" name="destino" id="destino" readonly="readonly">
                        </div>
                        <div class="row col-md-12">
                            <p id="costo" name="costo" class="col-md-6"><b>Costo: </b></p>
                            <input class="col-md-6 form-control" type="text" name="costo" id="costo" value="{{$send->costo}}">
                        </div>
                        <div class="row col-md-12 justify-content-center">
                            <input class="col-md-4" type="text" style="visibility: hidden;" value="0" name="estado" id="estado">
                            <input class="col-md-4" type="text" style="visibility: hidden;" value="{{$send->user_id}}" name="user_id" id="user_id">
                        </div>
                        <div class="form-group">
                            {{Form::submit('Pagar con PayPal', ['class' => 'btn btn-primary'])}}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection