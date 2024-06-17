@extends('layouts.app')

@section('title', 'Type')

@section('content')
    <video class="bg-video" src="{{ Vite::asset('resources/img/video/bg-v-5.mp4') }}" autoplay muted loop playsinline
        alt="video bg"></video>
    <div class="container d-flex align-items-center flex-column">
        @foreach ($types as $type)
            <a href="{{ route('types.show', $type) }}" class="card text-bg-dark my-4">
                <img src="{{ Vite::asset($type->img_carosel) }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h3 class="card-title">{{ $type->name }}</h3>

                </div>
            </a>
        @endforeach
    </div>

@endsection
