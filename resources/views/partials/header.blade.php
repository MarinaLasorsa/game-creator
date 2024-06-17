<header>
    <section>
        {{--<nav class="container ">
            <div class="d-flex justify-content-start align-items-center gap-5">
                <a class="text-warning" href="{{route('characters.index')}}">CHARACTERS</a>
                <a class="text-primary"  href="{{route('index')}}">WEAPONS</a>
                <a class="text-success" href="{{route('characters.create')}}">CREATE NEW CHARACTERS</a>
            </div>
        </nav>--}}

        <nav class="navbar navbar-expand-md navbar-light bg-dark bg-opacity-75 shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <div class="logo_laravel">
                        <img src="{{ Vite::asset('resources/img/utility/logo.png') }}" width="100">
                    </div>
                    {{-- config('app.name', 'Laravel') --}}
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item d-flex">
                            {{--<a class="nav-link" href="{{url('/') }}">{{ __('Home') }}</a>--}}
                            <a class="nav-header-link" href="{{ url('admin') }}">{{__('Dashboard')}}</a>
                            <a class="nav-header-link" href="{{route('admin.characters.index')}}">Personaggi</a>
                            <a class="nav-header-link"  href="{{route('admin.weapons.index')}}">Armi</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-header-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('admin') }}">{{__('Dashboard')}}</a>
                                <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    </section>
</header>