@extends('layouts.app')

@section('title', 'Characters')

@section('content')
<div class="container py-5">
  <h1 class="text-center text-warning p-3">Characters Table</h1>
<table class="table table-dark table-hover ">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">description</th>
      <th scope="col">attack</th>
      <th scope="col">defence</th>
      <th scope="col">speed</th>
      <th scope="col">life</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($characters as $character )
  <tr>
      <th scope="row"><a href="{{route('characters.show', $character)}}">{{$character->name}}</a></th>
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
@endsection