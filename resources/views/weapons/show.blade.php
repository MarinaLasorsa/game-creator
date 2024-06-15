@extends('layouts.app')

@section('title', $weapon->name)

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 ">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center text-warning p-3">{{ $weapon->name }}</h1>
                    </div>
                    <div class="card-body">
                 
                        <p class="card-text"><span class="fw-bold">Classe: </span>{{ $weapon->category}}</p>


                        <p class="card-text"><span class="fw-bold">Peso: </span>{{ $weapon->weight }}</p>
                        <p class="card-text"><span class="fw-bold">Costo: </span> {{ $weapon->cost }}</p>
                        <p class="card-text"><span class="fw-bold">Attacco: </span> {{ $weapon->damage_dice }}</p>
                        
                       
                    </div>
             

                </div>
            </div>
        </div>
    </div>
@endsection
