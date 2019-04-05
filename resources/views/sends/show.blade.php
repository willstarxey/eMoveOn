@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card col-md-12">
                    <div class="row card-header">
                        <p class="col-md-6 text-left"><strong>Detalles del Paquete</strong></p>
                        @if ($sends->estado!=null)
                            <p class="col-md-6 text-right">Paquete en Ruta</p>
                        @else
                            <p class="col-md-6 text-right">Paquete sin repartidor</p>
                        @endif
                    </div>
                    <div class="card-body">
                        <p id="nombreDest"><b>Nombre de la persona que recibe: </b>{{$sends->nombreDest}}</p>
                        <p id="peso"><b>Peso: </b>{{$sends->peso}}KG</p>
                        <p id="dimensiones"><b>Dimensiones: </b>{{$sends->dimensiones}}CM</p>
                        <p id="remitente"><b>Lugar de remitencia: </b>{{$sends->remitente}}</p>
                        <p id="destino"><b>Lugar de destino: </b>{{$sends->destino}}</p>
                        <p id="costo"><b>Costo: </b>${{$sends->costo}}</p>
                        @if ($repartidor != null)
                            <p><b>Repartidor: {{$repartidor->name}}</b></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection