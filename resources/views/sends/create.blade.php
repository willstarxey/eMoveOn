@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Datos de Envío</div>
                    <div class="card-body">
                        @include('sends.partials.error')
                        {!! Form::open(['route' => 'sends.store']) !!}
                        @include('sends.partials.form')
                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Mapa</div>
                    <div class="card-body">
                        {!!$directions['js']!!}
                        {!!$directions['html']!!}
                        <div id="directionsId"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection