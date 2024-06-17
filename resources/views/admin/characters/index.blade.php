@extends('layouts.app')

@section('title', 'Characters')

@section('content')
<video class="bg-video" src="{{ Vite::asset('resources/img/video/bg-v-4.mp4') }}" autoplay muted loop playsinline
        alt="video bg"></video>
<div class="container py-5 text-eb-garamond">
  <h1 class="text-center text-orange p-3">Personaggi</h1>
  <div class="table-responsive card bg-dark">
    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th scope="col">Creato da</th>
          <th scope="col">Nome</th>
          <th scope="col">Descrizione</th>
          <th scope="col">Attacco</th>
          <th scope="col">Difesa</th>
          <th scope="col">Velocità</th>
          <th scope="col">Vita</th>
          
  
          
        </tr>
      </thead>
      <tbody>
      @foreach ($characters as $character )
      <tr>
        <th>{{$character->user->name}}</th>  
        <th scope="row"><a  class="link-orange"  href="{{route('admin.characters.show', $character)}}">{{$character->name}}</a></th>
          <td>{{$character->description}}</td>
          <td>{{$character->attack}}</td>
          <td>{{$character->defence}}</td>
          <td>{{$character->speed}}</td>
          <td>{{$character->life}}</td>
          
          
        </tr>
      @endforeach
      </tbody>
    
      
    </table>
  </div>
</div>
@endsection