@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="login-wrap">
                    <div class="login-html">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h1>SISGP</h1>
                            <div class="group mb-3">
                                <label for="email" class="label ml-3">{{ __('Usuario') }}</label>
    
                                <div class="col-md-12">
                                    <input id="email" type="email" class=" @error('email') is-invalid @enderror input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="group mb-3">
                                <label for="password" class="label ml-3">{{ __('Contraseña') }}</label>
    
                                <div class="col-md-12">
                                    <input id="password" type="password" class=" @error('password') is-invalid @enderror input" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            {{-- <div class="group">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Recuerdame') }}
                                        </label>
                                    </div>
                                </div>
                            </div> --}}
    
                            <div class="group ">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-danger button">
                                        {{ __('Entrar') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            
        </div>
    </div>
</div>
@endsection
