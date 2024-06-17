@extends('layouts.app')

@section('title', 'Edit')
@auth
@if ($character->user_id === Auth::id())    

@section('content')
<img class="bg-video" src="{{ Vite::asset('resources/img/bg/bg-1.png') }}" alt="">
    <main>
        <section class="py-4">

            <div class="container text-white">
                <form action="{{ route('admin.characters.update', $character) }}" method="POST">

                    {{-- Cross Site Request Forgering --}}
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="inserisci il nome" value="{{ old('name', $character->name) }}">
                    </div>

                    <div class="mb-3">
                        <label for="genre" class="form-label">Genere</label>
                        <select class="form-control" name="genre" id="genre">

                            <option value="">Seleziona Genere</option>

                            <option @selected('male' == old('genre', $character->genre)) value="male">maschio</option>
                            <option @selected('female' == old('genre', $character->genre)) value="female">femmina</option>

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="type_id" class="form-label">Classe</label>
                        <select class="form-control" name="type_id" id="type_id">
                            <option value="">-- Seleziona Classe --</option>
                            @foreach ($types as $type)
                                <option @selected($type->id == old('type_id', $character->type_id)) value="{{ $type->id }}"> {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>



                    <div class="mb-3">
                        <label for="attack" class="form-label">Attacco</label>
                        <input type="number" min="0" max="999" step="1" name="attack"
                            class="form-control" id="attack" placeholder="inserisci il valore di attacco"
                            value="{{ old('attack', $character->attack) }}">
                    </div>

                    <div class="mb-3">
                        <label for="defence" class="form-label">Difesa</label>
                        <input type="number" min="0" max="999" step="1" name="defence"
                            class="form-control" id="defence" placeholder="inserisci il valore di difesa"
                            value="{{ old('defence', $character->defence) }}">
                    </div>

                    <div class="mb-3">
                        <label for="speed" class="form-label">Velocità</label>
                        <input type="number" min="0" max="999" step="1" name="speed"
                            class="form-control" id="speed" placeholder="inserisci valore di velocità"
                            value="{{ old('speed', $character->speed) }}">
                    </div>

                    <div class="mb-3">
                        <label for="life" class="form-label">Vita</label>
                        <input type="number" min="0" max="999" step="1" name="life"
                            class="form-control" id="life" placeholder="inserisci il valore della vità"
                            value="{{ old('life', $character->life) }}">
                    </div>

                    <div class="my-3">
                        <div class="form-label">Armi</div>
                        <div class="d-flex flex-wrap gap-3">
                            @foreach ($character->weapons as $weapon)
                                @php
                                    $arr_weapons = old('weapons', null);
                                    $value_weapon = '';
                                    if ($arr_weapons != null) {
                                        $value_weapon = $arr_weapons[$loop->index];
                                    } else {
                                        $value_weapon = $weapon->pivot->quantity;
                                    } 
                                @endphp
                                <div class="input-group mb-3">
                                    <label class="input-group-text"
                                        for="weapons-{{ $weapon->id }}">{{ $weapon->name }}</label>
                                    <input type="number" class="form-control" name="weapons[]"
                                        id="weapons-{{ $weapon->id }}" value="{{$value_weapon}}">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" rows="3"
                            placeholder="Descrizione del personaggio">{{ old('description', $character->description) }}</textarea>
                    </div>

                    <button class="btn btn-primary">Modifica</button>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </section>
    </main>

@endsection

    
@endif
@endauth