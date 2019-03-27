@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="d-flex flex-column align-items-center">
                            <div class="col-md-6">
                                <a class="btn btn-block btn-facebook flex-center" href="{{ route('facebookLogin') }}">
                                    {{ __('Iniciar con Facebook') }}
                                </a>
                            </div>
                            <hr>
                            <div class="col-md-6 row">
                                <a class="btn btn-block btn-twitter flex-center" href="{{ route('twitterLogin') }}">
                                    {{ __('Iniciar con Twitter') }}
                                </a>
                            </div>
                            <hr>
                            <div class="col-md-6 row">
                                <a class="btn btn-block btn-google flex-center" href="{{ route('googleLogin') }}">
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
