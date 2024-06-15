@extends('layouts.app')

@section('content')
    <video class="bg-video" src="{{ Vite::asset('resources/img/video/bg-v-2.mp4') }}" autoplay muted loop playsinline
        alt="video bg"></video>
    <div class="box-video">
        <div class="form-pergamena">
            <img class="perg-bg" src="{{ Vite::asset('resources/img/bg/bg-pergamena.png') }}" alt="">
            <h2 class="perg-title">Login</h2>
            <div class="perg-content">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <label for="email">{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email"
                        class="form-control mb-2 text-center @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <label for="password">{{ __('Password') }}</label>

                    <input id="password" type="password"
                        class="form-control mb-2 text-center @error('password') is-invalid @enderror" name="password"
                        required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-check">
                        <input class="" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary mt-2">
                        {{ __('Login') }}
                    </button>
                    <br>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link p-0" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </form>
            </div>
        </div>

    </div>
@endsection
