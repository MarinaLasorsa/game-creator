@extends('layouts.app')

@section('title', 'Weapons')

@section('content')
<video class="bg-video" src="{{ Vite::asset('resources/img/video/bg-v-5.mp4') }}" autoplay muted loop playsinline
  alt="video bg"></video>
<div class="container py-5">
  <div class="row">
    @foreach ($weapons as $weapon)
    <div class="col-4 py-3">
      <a href="{{route('admin.weapons.show', $weapon)}}" class="card text-light custom-card" style="width: 18rem;">
      <img src="{{ Vite::asset($weapon->image) }}" class="card-img-top" alt="...">
      <div  class="card-body ">
        <h5 class="card-title text-center">
        {{$weapon->name}}
        </h5>
        <!-- <p class="card-text">Categoria :{{$weapon->category}}</p>
        <p class="card-text">Costo: {{$weapon->cost}}</p>
        <p class="card-text">Peso: {{$weapon->weight}}</p>
        <p class="card-text"> Danno : {{$weapon->damage_dice}}</p>
        <a href="{{route('admin.weapons.show', $weapon)}}" class="btn btn-outline-warning">Dettagli arma</a> -->
      </div>
      </a>

    </div>

  @endforeach

  </div>
</div>
@endsection

<!-- <h1 class="text-center text-orange p-3">Armi</h1>
<table class="table table-dark table-hover ">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Categoria</th>
      <th scope="col">Costo</th>
      <th scope="col">Peso</th>
      <th scope="col">Danni</th>
      
    </tr>

    
  </thead>
  <tbody>
  <tr>
      <th scope="row"><a class="link-orange" href="{{route('admin.weapons.show', $weapon)}}">{{$weapon->name}}</a></th>
      <td>{{$weapon->category}}</td>
      <td>{{$weapon->cost}}</td>
      <td>{{$weapon->weight}}</td>
      <td>{{$weapon->damage_dice}}</td>
    </tr>
  </tbody>
 
  
</table> -->

