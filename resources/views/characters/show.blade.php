@extends('layouts.app')

@section('title', 'Laravel')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-auto">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center text-warning p-3">{{$character->name}}</h1>
                </div>
                <div class="card-body">
                <p class="card-text">{{$character->description}}</p>
                <p class="card-text">Attack: {{$character->attack}}</p>
                <p class="card-text">Defence: {{$character->defence}}</p>
                <p class="card-text">Speed: {{$character->speed}}</p>
                <p class="card-text">Life: {{$character->life}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection