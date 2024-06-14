<header>
    <div class="container-fluid position-relative">
        <nav class="row align-items-center position-absolute z-1 w-100 py-2">
            <div class="col">
                <img src="{{ Vite::asset('resources/img/logo.png') }}" width="100">
            </div>
            <div class="col-auto">
                <a class="btn btn-dark bg-transparent border-0" href="{{ route('login') }}">
                    <span class="material-symbols-rounded">
                        person
                    </span>
                </a>
            </div>
        </nav>
    </div>
</header>
