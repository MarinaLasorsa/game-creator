@extends('layouts.app')

@section('title', $type->name)

@section('content')
<img class="bg-video" src="{{ Vite::asset('resources/img/bg/bg-1.png') }}" alt="">

<div class="container d-flex align-items-center flex-column justify-center py-5">
    <div class="container py-5">

        <div class="card mb-3 bg-dark bg-opacity-75">
            <img src="{{ Vite::asset($type->img_carosel) }}" class="card-img-top" alt="...">
            <div class="card-body text-white">
              <h5 class="card-title">{{$type->name}}</h5>
              <p class="card-text">{{$type->description}}</p>

            </div>
        </div>





    </div>



</div>



@endsection