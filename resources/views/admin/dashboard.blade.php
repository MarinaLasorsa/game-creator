@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
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
    </div>
    <div class="col">
        <div class="card my-3">
            <div class="card-header">
              I Miei Personaggi
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($userCharacters as $userCharacter)
              <li class="list-group-item"><a href="{{route('admin.characters.show', $userCharacter)}}" class="btn-link">{{$userCharacter->name}}</a></li>
               @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
