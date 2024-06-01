@extends('layouts.app')

@section('title', 'Weapons')

@section('content')
<div class="container py-5">
  <h1 class="text-center text-primary p-3">Weapons Table</h1>
<table class="table table-dark table-hover ">
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