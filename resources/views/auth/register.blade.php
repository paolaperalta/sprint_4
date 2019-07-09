@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 offset-4 titulo-login-pao text-center">
        <h2>REGISTRARME</h2>
    </div>
  </div>
    <div class="row">
        <div class="col-lg-6 offset-3">
              <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-12">
                              <label for="name" class="etiquetas">{{ __('NOMBRE') }}</label>
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror completar" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                              <label for="email" class="etiquetas">{{ __('EMAIL') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror completar" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="password" class="etiquetas">{{ __('CONTRASEÑA') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror completar" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="password-confirm" class="etiquetas">{{ __('CONFIRMAR CONTRASEÑA') }}</label>
                                <input id="password-confirm" type="password" class="form-control completar" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="avatar" class="etiquetas">{{ __('SUBIR AVATAR') }}</label>
                                <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror completar" name="avatar" required value="{{ old('avatar') }}" autofocus>

                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-12">
                                <button type="submit" class="p_btn btn btn-info">
                                    {{ __('Crear cuenta') }}
                                </button>
                                <a class="signUp" href="/login">¡Ya tengo una cuenta!</a>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection
