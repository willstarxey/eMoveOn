@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 items-align-center">
            <div class="card">
                <div class="card-header">Felicidades, tu paquete se ha agregado!</div>

                <div class="card-body">
                    <div class="row col-md-12 justify-content-center">
                         <img src="/gallery/package.png" class="success">
                    </div>
                    <hr>
                    <div class="row col-md-12 justify-content-center">
                        <a class="btn btn-primary" href="{{ url('/') }}">Ir a Inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
