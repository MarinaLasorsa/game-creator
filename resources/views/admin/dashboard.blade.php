@extends('layouts.app')

@section('content')
<video class="bg-video" src="{{ Vite::asset('resources/img/video/bg-v-3.mp4') }}" autoplay muted loop playsinline
        alt="video bg"></video>
<div class="container text-eb-garamond">
    <div class="d-flex align-items-center">
        <h2 class="text-dark-red my-4">
            I Miei Personaggi
        </h2>
        <h3 class="ms-3"><span class="badge bg-orange text-black"><a href="{{route('admin.characters.create')}}"><i class="fa-solid fa-plus"></i></a></span></h3>
    </div>
    
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
                        <th class="d-flex align-middle">
                            <h5 class="text-orange">I Miei Personaggi</h5>
                            <h5 class="ms-3"><span class="badge bg-orange text-black"><a href="{{route('admin.characters.create')}}"><i class="fa-solid fa-plus"></i></a></span></h5>
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userCharacters as $userCharacter)
                    <tr>
                        <td class="align-middle">
                            <a class="link-orange" href="{{route('admin.characters.show', $userCharacter)}}">{{$userCharacter->name}}</a>
                        </td>
                        <td class="d-flex justify-content-end">
                            <a class="btn link-orange" href="{{route('admin.characters.edit', $userCharacter)}}">Modifica</a>
                            <form action="{{route('admin.characters.destroy', $userCharacter)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn link-orange" onclick="return confirm('Sei sicuro di voler eliminare questo personaggio?')">Elimina</button>
                        </form></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
