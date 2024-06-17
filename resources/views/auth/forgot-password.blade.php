@extends('layouts.app')

@section('content')
    <img class="bg-video" src="{{ Vite::asset('resources/img/bg/bg-1.png') }}" alt="">

    <div class="box-video">
        <div class="form-pergamena">
            <img class="perg-bg" src="{{ Vite::asset('resources/img/bg/bg-pergamena.png') }}" alt="">
            <h2 class="perg-title">Reset Password</h2>
            <div class="perg-content">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <label for="email" class="col-form-label">{{ __('E-Mail Address :') }}</label>

                    <input id="email" type="email" class="form-control mb-3 @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="mb-0">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
