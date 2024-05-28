@extends('layouts.app')

@section('title', 'Laravel')

@section('content')
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Cost</th>
      <th scope="col">Weight</th>
      <th scope="col">Damage_dice</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($weapons as $weapon )
  <tr>
      <th scope="row">{{$weapon->name}}</th>
      <td>{{$weapon->category}}</td>
      <td>{{$weapon->cost}}</td>
      <td>{{$weapon->weight}}</td>
      <td>{{$weapon->damage_dice}}</td>
    </tr>
  @endforeach
  </tbody>
 
  
</table>
</div>
@endsection