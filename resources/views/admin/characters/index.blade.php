@extends('layouts.app')

@section('title', 'Characters')

@section('content')
    <video class="bg-video" src="{{ Vite::asset('resources/img/video/bg-v-4.mp4') }}" autoplay muted loop playsinline
        alt="video bg"></video>
    <div class="container py-5 text-eb-garamond">
        <h1 class="text-center text-orange p-3">Personaggi</h1>

        @foreach ($characters as $character)

            <a href="{{ route('admin.characters.show', $character) }}" class="card bg-transparent mb-3">
                <div class="row g-0 bg-dark bg-opacity-75 text-white align-items-center">
                    <div class="col-md-9">
                        <div class="card-body">
                            <h2 class="card-title mb-0">{{ $character->name }}</h2>
                            <p class="card-text"><small class="text-secondary">{{ $character->user->name }}</small></p>
                            <p class="card-text">{{ $character->description }}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        @if ($character->genre === 'male')
                            <img src="{{ Vite::asset($character->type->img_m) }}" class="img-fluid rounded-end"
                                alt="...">
                        @else
                            <img src="{{ Vite::asset($character->type->img_f) }}" class="img-fluid rounded-end"
                                alt="...">
                        @endif
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
