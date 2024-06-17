<header>
    <div class="container-fluid position-relative z-2">
        <nav class="row align-items-center position-absolute z-1 w-100 py-2">
            <div class="col">
                <a href="{{ url('/') }}">
                    <img src="{{ Vite::asset('resources/img/utility/logo.png') }}" width="100">
                </a>
            </div>
            <div class="col-auto">
                @if (Route::currentRouteName() !== 'login')
                    <a class="btn btn-dark bg-transparent border-0" href="{{ route('login') }}">
                        <img src="{{ Vite::asset('resources/img/utility/user.svg') }}" alt="">
                        <br>
                        login
                    </a>
                @else
                    <a class="btn btn-dark bg-transparent border-0" href="{{ route('register') }}">
                        <img src="{{ Vite::asset('resources/img/utility/user.svg') }}" alt="">
                        <br>
                        Register
                    </a>
                @endif
            </div>
        </nav>
    </div>
</header>
