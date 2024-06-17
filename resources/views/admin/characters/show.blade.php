@extends('layouts.app')

@section('title', $character->name)

@section('content')
<img class="bg-video" src="{{ Vite::asset('resources/img/bg/bg-1.png') }}" alt="">
    <div class="container py-5 text-eb-garamond">
        <div class="row">
            <div class="col-12 ">
                <div class="card-character-show">
                    @if ($character->genre === 'male')
                        <img src="{{ Vite::asset($character->type->img_m) }}" class="card-img" alt="...">
                    @else
                        <img src="{{ Vite::asset($character->type->img_f) }}" class="card-img" alt="...">
                    @endif
                    <div class="card-img-overlay bg-half-dark">
                        <div style="height:250px"></div>
                        <h1 class="card-title text-center text-orange p-3">{{ $character->name }}</h1>
                        <p class="card-text"><span class="fw-bold">Descrizione: </span>{{ $character->description }}</p>
                        <p class="card-text"><span class="fw-bold"><img
                                    src="{{ Vite::asset('resources/img/utility/attack.svg') }}" width="20"> </span>
                            {{ $character->attack }}</p>
                        <p class="card-text"><span class="fw-bold"><img
                                    src="{{ Vite::asset('resources/img/utility/defence.svg') }}" width="20"> </span>
                            {{ $character->defence }}</p>
                        <p class="card-text"><span class="fw-bold"><img
                                    src="{{ Vite::asset('resources/img/utility/speed.svg') }}" width="20">
                            </span>{{ $character->speed }}</p>
                        <p class="card-text"><span class="fw-bold"><img
                                    src="{{ Vite::asset('resources/img/utility/life.svg') }}" width="20"> </span>
                            {{ $character->life }}</p>

                        <p class="card-text"><span class="fw-bold"><img
                                    src="{{ Vite::asset('resources/img/utility/type.svg') }}" width="20">
                            </span>{{ $character->type->name }}</p>

                        <div class="border border-light rounded p-4 position-relative mx-5 mb-3 mt-5">
                            <img class="position-absolute top-0 start-0 translate-middle" src="{{ Vite::asset('resources/img/utility/box.svg') }}" width="40">
                            <ul class="d-flex flex-wrap align-items-center gap-3 p-0 mb-0">

                                @foreach ($character->weapons as $current_weapon)
                                    <li>
                                        <div @class([
                                            'badge',
                                            'position-relative',
                                            'bg-opacity-25',
                                            'text-bg-info' => $current_weapon->category === 'Simple Melee Weapons',
                                            'text-bg-success' => $current_weapon->category === 'Simple Ranged Weapons',
                                            'text-bg-warning' => $current_weapon->category === 'Martial Melee Weapons',
                                            'text-bg-danger' => $current_weapon->category === 'Martial Ranged Weapons',
                                        ])>
                                            <img src="{{ Vite::asset($current_weapon->image) }}" alt=""
                                                width="30px">
                                            <span
                                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-white text-black">
                                                {{ $current_weapon->pivot->quantity }}
                                            </span>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        @auth
                            @if ($character->user_id === Auth::id())
                                <div id="form" class="d-flex justify-content-center align-items-center gap-4">
                                    <button class="btn btn-outline-danger" id="trash">Elimina</button>
                                    <a class="btn btn-outline-warning"
                                        href="{{ route('admin.characters.edit', $character) }}">Modifica
                                    </a>
                                </div>
                            @endif
                        @endauth
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
    </div>

@endsection
