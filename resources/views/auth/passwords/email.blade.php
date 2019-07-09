@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">

                <div class="col-lg-4 offset-4 titulo-login-pao">
                    <h2 class="text-center">{{ __('RESETEAR PASSWORD') }}</h2>
                </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6 offset-3">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-12">
                                <label for="email" class="etiquetas">{{ __('E-Mail ') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror completar" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="p_btn btn btn-info">
                                    {{ __('Enviar') }}
                                </button>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
       
</div>
@endsection
