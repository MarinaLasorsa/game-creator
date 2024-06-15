@extends('layouts.app')

@section('content')
<video class="bg-video" src="{{ Vite::asset('resources/img/video/bg-v-2.mp4') }}" autoplay muted loop playsinline
        alt="video bg"></video>
    <div class="box-video">
        <div class="form-pergamena">
            <img class="perg-bg" src="{{ Vite::asset('resources/img/bg/bg-pergamena.png') }}" alt="">
            <h2 class="perg-title">Register</h2>
            <div class="perg-content">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-2 row">
                        <label for="name" class="p-0">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2 row">
                        <label for="email" class="p-0">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2 row">
                        <label for="password" class="p-0">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2 row">
                        <label for="password-confirm" class="p-0">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="mb-2 row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            
            </div>
        </div>

    </div>
@endsection
