@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Datos completos del envío</div>
                    <div class="card-body">
                    <p><strong>Nombre de quien recibe: </strong>{{$sends->nombreDest}}</p>
                    <p><strong>Origen: </strong>{{$sends->origen}}</p>
                    <p><strong>Destino: </strong>{{$sends->destino}}</p>
                    <p><strong>Dimensiones: </strong>{{$sends->dimensiones}}</p>
                    <p><strong>Peso: </strong>{{$sends->peso}}</p>
                    <p><strong>Costo: </strong>{{$sends->costo}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection