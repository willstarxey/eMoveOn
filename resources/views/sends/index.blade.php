@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Paquetes en Stock</div>
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
                                    <td>{{$send->costo}}</td>
                                    <td>
                                        @can('sends.show')
                                            <a href="{{'sends.show',$send->id}}" class="btn btn-sm btn-primary">Ver</a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('sends.edit')
                                            <a href="{{'sends.edit',$send->id}}" class="btn btn-sm btn-primary">Tomar</a>
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection