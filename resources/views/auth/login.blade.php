@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 offset-4 titulo-login-pao">
            <h2 class="text-center">INICIAR SESIÓN</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 offset-3">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class=" row">
                  

                    <div class="col-12">
                    <label for="email" class="etiquetas">{{ __('EMAIL') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror completar" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class=" row">
                    

                    <div class="col-12">
                        <label for="password" class="etiquetas">{{ __('CONTRASEÑA') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror completar" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class=" row">
                    <div class="col-md-3 mt-4 mb-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-12">
                        <button type="submit" class="p_btn btn btn-info">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Olvidaste tu contraseña?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>

    </div>
                






</div>
@endsection
