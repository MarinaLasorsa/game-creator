@extends('layouts.app')

@section('title', 'Weapons')

@section('content')
    <video class="bg-video" src="{{ Vite::asset('resources/img/video/bg-v-5.mp4') }}" autoplay muted loop playsinline
        alt="video bg"></video>
    <div class="container py-5 text-eb-garamond">
        <div class="row justify-content-center">
            @foreach ($weapons as $weapon)
                <div class="col-sm-6 col-lg-4 py-3">
                    <a href="{{ route('admin.weapons.show', $weapon) }}" class="card text-light custom-card h-100">
                        <img src="{{ Vite::asset($weapon->image) }}" class="card-img-top" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title text-center">
                                {{ $weapon->name }}
                            </h5>
                            <!-- <p class="card-text">Categoria :{{ $weapon->category }}</p>
              <p class="card-text">Costo: {{ $weapon->cost }}</p>
              <p class="card-text">Peso: {{ $weapon->weight }}</p>
              <p class="card-text"> Danno : {{ $weapon->damage_dice }}</p>
              <a href="{{ route('admin.weapons.show', $weapon) }}" class="btn btn-outline-warning">Dettagli arma</a> -->
                        </div>
                    </a>

                </div>
            @endforeach
        </div>
    </div>
@endsection
