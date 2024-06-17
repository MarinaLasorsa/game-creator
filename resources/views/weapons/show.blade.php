@extends('layouts.app')

@section('title', $weapon->name)

@section('content')
    <img class="bg-video" src="{{ Vite::asset('resources/img/bg/bg-1.png') }}" alt="">
    <div class="container py-5">
        <div class="card bg-transparent  mb-3">
            <div class="row g-0 bg-dark bg-opacity-75">
                <div class="col-md-4">
                    <img src="{{ Vite::asset($weapon->image) }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body text-white">
                        <h3 class="card-title eb-garamond text-orange">{{ $weapon->name }}</h3>
                        <p class="card-text"><span class="fw-bold">Classe: </span>{{ $weapon->category }}</p>
                        <p class="card-text"><span class="fw-bold">Peso: </span>{{ $weapon->weight }}</p>
                        <p class="card-text"><span class="fw-bold">Costo: </span> {{ $weapon->cost }}</p>
                        <p class="card-text"><span class="fw-bold">Attacco: </span> {{ $weapon->damage_dice }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
