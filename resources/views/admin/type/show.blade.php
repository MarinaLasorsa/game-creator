@extends('layouts.app')

@section('title', $type->name)

@section('content')


<div class="container d-flex align-items-center">

 <img style="width: 100%" src="{{Vite::asset($type->img_carosel)}}" alt="">   

</div>



@endsection