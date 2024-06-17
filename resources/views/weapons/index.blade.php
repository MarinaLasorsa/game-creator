@extends('layouts.app')

@section('title', 'Weapons')

@section('content')
<video class="bg-video" src="{{ Vite::asset('resources/img/video/bg-v-5.mp4') }}" autoplay muted loop playsinline
        alt="video bg"></video>
<div class="container py-5 text-eb-garamond">
  <h1 class="text-center text-orange p-3">Armi</h1>
  <div class="table-responsive card bg-dark">
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
      @foreach ($weapons as $weapon )
      <tr>
          <th scope="row"><a class="link-orange" href="{{route('admin.weapons.show', $weapon)}}">{{$weapon->name}}</a></th>
          <td>{{$weapon->category}}</td>
          <td>{{$weapon->cost}}</td>
          <td>{{$weapon->weight}}</td>
          <td>{{$weapon->damage_dice}}</td>
        </tr>
      @endforeach
      </tbody>
    
      
    </table>
  </div>
</div>
@endsection
