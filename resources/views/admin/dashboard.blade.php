@extends('layouts.app')

@section('content')
    <video class="bg-video" src="{{ Vite::asset('resources/img/video/bg-v-3.mp4') }}" autoplay muted loop playsinline
        alt="video bg"></video>
    <div class="container text-eb-garamond">
        <div class="d-flex align-items-center">
            <h2 class="text-dark-red my-4 ps-3">
                I Miei Personaggi
            </h2>
            <h3 class="ms-3"><span class="badge bg-orange text-black"><a href="{{ route('admin.characters.create') }}"><i
                            class="fa-solid fa-plus"></i></a></span></h3>
        </div>
        <div class="d-flex flex-wrap">
            @foreach ($userCharacters as $userCharacter)
                @if (count($userCharacter->users))
                    @if ($userCharacter->users[0]->id == Auth::id())
                        <div class="col-4 p-4 border border-3 border-warning rounded">
                            <div class="card position-relative text-bg-dark">

                                @if ($userCharacter->genre === 'male')
                                    <img src="{{ Vite::asset($userCharacter->type->img_m) }}" class="card-img"
                                        alt="...">
                                @else
                                    <img src="{{ Vite::asset($userCharacter->type->img_f) }}" class="card-img"
                                        alt="...">
                                @endif

                                <a href="{{ route('admin.characters.show', $userCharacter) }}">
                                    <div class="hover-text card-hover">
                                        <p class="card-title">{{ $userCharacter->name }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @else
                    <div class="col-4 p-4">
                        <div class="card position-relative text-bg-dark">

                            @if ($userCharacter->genre === 'male')
                                <img src="{{ Vite::asset($userCharacter->type->img_m) }}" class="card-img" alt="...">
                            @else
                                <img src="{{ Vite::asset($userCharacter->type->img_f) }}" class="card-img" alt="...">
                            @endif

                            <a href="{{ route('admin.characters.show', $userCharacter) }}">
                                <div class="hover-text card-hover">
                                    <p class="card-title">{{ $userCharacter->name }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    @endsection
