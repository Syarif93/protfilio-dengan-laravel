@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-body">
        <div class="form-header">{{ __('Login') }}</div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-input"> 
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <i class="fas fa-envelope"></i>
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-input">

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                    <i class="fas fa-lock"></i>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="check-box">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <i></i>
    
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me!') }}
                        </label>
                    </div>
                </div>


                <button type="submit" class="btn-submit">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn-forgot" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

            </form>
    </div>
</div>
@endsection
