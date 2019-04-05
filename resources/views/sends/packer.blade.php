@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Mis Paquetes Seleccionados</div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width='10px'>ID</th>
                                    <th>Origen</th>
                                    <th>Destino</th>
                                    <th>Costo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sends as $send)
                                <tr>
                                    <td>{{$send->id}}</td>
                                    <td>{{$send->remitente}}</td>
                                    <td>{{$send->destino}}</td>
                                    <td>${{$send->costo}}</td>
                                    <td>
                                            <a href="{{route('sends.show',$send->id)}}" class="btn btn-sm btn-primary">Detalles</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$sends->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection