@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Iniciar Sesión') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <div class="col-md-6 row">
                                <p class="flex-center">Si no te haz registrado, haz click en cualquiera de los botones y te registrará automáticamente</p>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-block btn-facebook flex-center" href="{{ route('facebookLogin') }}">
                                    <span class="fa fa-facebook"><img src="/gallery/Facebook-color.svg" style="width: 50%"></span>
                                    {{ __('Iniciar con Facebook') }}
                                </a>
                            </div>
                            <hr>
                            <div class="col-md-4">
                                <a class="btn btn-block btn-twitter flex-center" href="{{ route('twitterLogin') }}">
                                    <span class="fa fa-twitter"><img src="/gallery/Twitter-color.svg" style="width: 50%"></span>
                                    {{ __('Iniciar con Twitter') }}
                                </a>
                            </div>
                            <hr>
                            <div class="col-md-4">
                                <a class="btn btn-block btn-google flex-center" href="{{ route('googleLogin') }}">
                                    <span class="fa fa-google"><img src="/gallery/Google-color.svg" style="width: 50%"></span>
                                    {{ __('Iniciar con Google') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
