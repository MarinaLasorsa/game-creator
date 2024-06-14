@extends('layouts.app')
@section('content')
<video class="bg-video" src="{{ Vite::asset('resources/img/bg-v-1-1.mp4') }}" autoplay muted loop playsinline alt="video bg"></video>
<div class="box-video">
<h1 class="text-hero">WARRIOR</h1>
@if (Route::has('register'))<a class="fs-1 btn-rady-to-play" href="{{ route('register') }}">READY TO PLAY</a>

@endif
</div>                
@endsection