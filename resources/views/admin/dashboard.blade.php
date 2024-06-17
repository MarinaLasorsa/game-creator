@extends('layouts.app')

@section('content')
<video class="bg-video" src="{{ Vite::asset('resources/img/video/bg-v-3.mp4') }}" autoplay muted loop playsinline
        alt="video bg"></video>
<div class="container">
    <h2 class=" text-orange my-4">
        {{ __('Dashboard') }}
    </h2>
    {{--<div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>--}}
    <div class="col">
        <div class="table-responsive card bg-dark">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th><h5 class="text-orange">I Miei Personaggi</h5></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userCharacters as $userCharacter)
                    <tr>
                        <td><a class="link-orange" href="{{route('admin.characters.show', $userCharacter)}}">{{$userCharacter->name}}</a></td>
                        <td><a class="link-orange" href="{{route('admin.characters.edit', $userCharacter)}}">Modifica</a>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
