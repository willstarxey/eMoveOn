@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="row col-md-12 card-header items-align-center">
                        <p class="col-md-4 float-left">Datos completos del envío</p>
                    </div>
                    <div class="card-body">
                        @include('sends.partials.error')
                        {!! Form::model($sends,['route'=>['sends.update', $sends->id],
                        'method'=> 'PUT']) !!}
                        @include('sends.partials.edit')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection