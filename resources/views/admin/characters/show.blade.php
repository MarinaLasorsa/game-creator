@extends('layouts.app')

@section('title', $character->name)

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 ">
                <div class="card bg-dark text-white">
                    <div class="card-header">
                        <h1 class="text-center text-orange p-3">{{ $character->name }}</h1>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><span class="fw-bold">Genere: </span>{{ $character->genre }}</p>
                        <p class="card-text"><span class="fw-bold">Classe: </span>{{ $character->type->name }}</p>


                        <p class="card-text"><span class="fw-bold">Descrizione: </span>{{ $character->description }}</p>
                        <p class="card-text"><span class="fw-bold">Attacco: </span> {{ $character->attack }}</p>
                        <p class="card-text"><span class="fw-bold">Difesa: </span> {{ $character->defence }}</p>
                        <p class="card-text"><span class="fw-bold">Velocità: </span>{{ $character->speed }}</p>
                        <p class="card-text"><span class="fw-bold">Vita: </span> {{ $character->life }}</p>
                        <p>
                            Armi:
                        <ul class="d-flex flex-wrap align-items-center gap-3">

                            @foreach ($character->weapons as $current_weapon)
                                <li>
                                    <div @class([
                                        'badge text-bg-info position-relative' =>
                                            $current_weapon->category === 'Simple Melee Weapons',
                                        'badge text-bg-success position-relative' =>
                                            $current_weapon->category === 'Simple Ranged Weapons',
                                        'badge text-bg-warning position-relative' =>
                                            $current_weapon->category === 'Martial Melee Weapons',
                                        'badge text-bg-danger position-relative' =>
                                            $current_weapon->category === 'Martial Ranged Weapons',
                                    ])>
                                        {{ $current_weapon->name }}
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-white text-black">
                                            {{ $current_weapon->pivot->quantity }}
                                        </span>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                        </p>
                        @auth


                            @if ($character->user_id === Auth::id())
                                <div id="form" class="d-flex justify-content-center align-items-center gap-4">
                                    <button class="btn btn-outline-danger" id="trash">Trash</button>
                                    <a class="btn btn-outline-warning"
                                        href="{{ route('admin.characters.edit', $character) }}">Edit
                                    </a>
                                </div>
                            @endif
                        @endauth
                    </div>
                    <script>
                        let trash = document.getElementById('trash')

                        trash.addEventListener('click', function() {

                            let form = document.getElementById('form')

                            let trashConf = confirm('Sei sicuro di volere eliminare?')
                            if (trashConf === true) {

                                form.innerHTML +=
                                    `
                          <form action="{{ route('admin.characters.destroy', $character) }}" method="POST">
                          @method('DELETE')
                          @csrf

                          
     
                          <button type="submit" style="display:none;" id='confirm'>trash</button>

                          </form>
                        `
                                let confirm = document.getElementById('confirm').click()

                            }


                        })
                    </script>


                </div>
            </div>
        </div>
    </div>

@endsection
