@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card-header  items-align-center">
                            <p>Datos completos del envío (
                                @if ($sends->estado == false)
                                    <strong>Paquete aún sin enviar</strong>
                                @else
                                    <strong>Paquete en ruta</strong>
                                @endif
                            )</p>
                        </div>
                        <div class="card-body">
                                <p><strong>Nombre de quien recibe: </strong>{{$sends->nombreDest}}</p>
                                <p><strong>Origen: </strong>{{$sends->remitente}}</p>
                                <p><strong>Destino: </strong>{{$sends->destino}}</p>
                                <p><strong>Dimensiones: </strong>{{$sends->dimensiones}}cm</p>
                                <p><strong>Peso: </strong>{{$sends->peso}}Kg</p>
                                <p><strong>Costo: $</strong>{{$sends->costo}}</p>
                        </div>
            </div>
        </div>
    </div>
@endsection