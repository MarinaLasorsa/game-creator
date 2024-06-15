@extends('layouts.app')
@section('content')
    <video class="bg-video" src="{{ Vite::asset('resources/img/video/bg-v-1.mp4') }}" autoplay muted loop playsinline
        alt="video bg"></video>
    <div class="box-video">
        <h1 class="text-hero">WARRIOR</h1>
        @if (Route::has('register'))
            <a class="fs-1 btn-rady-to-play" href="{{ route('register') }}">READY TO PLAY</a>
        @endif
        <img class="arrow-down" src="{{ Vite::asset('resources/img/utility/arrow-down.gif') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">

                <img src="{{ Vite::asset('resources/img/utility/hr2.svg') }}" class="w-100">

                <p class="text-white text-center eb-garamond px-3 bg-dark bg-opacity-25 my-2">
                    Imbarcati in un'avventura epica con "Guerrieri delle Terre Selvagge", un gioco di strategia
                    avvincente
                    dove
                    la tua astuzia è la tua arma più potente. Costruisci il tuo esercito di leggendari guerrieri,
                    conquista
                    territori inesplorati e affronta nemici formidabili. Ogni decisione conta: pianifica le tue mosse
                    con
                    saggezza, sviluppa tattiche uniche e forgia alleanze strategiche.
                    <br> Sei pronto a diventare il sovrano indiscusso delle Terre Selvagge? La gloria ti aspetta!
                </p>

                <img src="{{ Vite::asset('resources/img/utility/hr2.svg') }}" class="w-100">

            </div>
            <div class="col-12 mb-3">
                <a href="{{ route('register') }}">
                    <h2 class="text-white text-center eb-garamond">Scegli il tuo ruolo e iscriviti!!!!</h2>
                </a>
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach ($types as $type)
                            @if ($loop->first)
                                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                            @else
                                <button type="button" data-bs-target="#carouselExampleAutoplaying"
                                    data-bs-slide-to="{{$loop->index}}" aria-label="{{'Slide '.($loop->index+1)}}"></button>
                            @endif
                        @endforeach
                    </div>
                    <div class="carousel-inner">

                        @foreach ($types as $type)
                            <div @class(['carousel-item', 'active' => $loop->first])>
                                <img src="{{ Vite::asset($type->img_carosel) }}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{ $type->name }}</h5>
                                    <p>{{ $type->description }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
