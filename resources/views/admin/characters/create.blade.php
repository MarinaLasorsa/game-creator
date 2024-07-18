@extends('layouts.app')

@section('title', 'Create')

@section('content')
    <img class="bg-video" src="{{ Vite::asset('resources/img/bg/bg-1.png') }}" alt="">
    <main>
        <section class="py-5">

            <div class="container text-white text-eb-garamond">
                <h2 class="text-center mb-4 text-orange">Crea un nuovo personaggio!</h2>

                <form action="{{ route('admin.characters.store') }}" method="POST">

                    {{-- Cross Site Request Forgering --}}
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control input-weapon" id="name"
                            placeholder="inserisci il nome" value="{{ old('name') }}">
                    </div>



                    <div class="mb-3">
                        <label for="attack" class="form-label">Attacco</label>
                        <input type="number" min="0" max="999" step="1" name="attack"
                            class="form-control input-weapon" id="attack" placeholder="inserisci il valore di attacco"
                            value="{{ old('attack', '1') }}">
                    </div>

                    <div class="mb-3">
                        <label for="genre" class="form-label">Genere</label>
                        <select class="form-control input-weapon" name="genre" id="genre">

                            <option class="input-weapon" value="">Seleziona Genere</option>

                            <option class="input-weapon" @selected('male' == old('genre')) value="male">maschio</option>
                            <option class="input-weapon" @selected('female' == old('genre')) value="female">femmina</option>


                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="type_id" class="form-label">Classe</label>
                        <select class="form-control input-weapon" name="type_id" id="type_id">
                            <option value="">-- Seleziona Classe --</option>
                            @foreach ($types as $type)
                                <option @selected($type->id == old('type_id')) value="{{ $type->id }}"> {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>




                    <div class="mb-3">
                        <label for="defence" class="form-label">Difesa</label>
                        <input type="number" min="0" max="999" step="1" name="defence"
                            class="form-control input-weapon" id="defence" placeholder="inserisci il valore di difesa"
                            value="{{ old('defence', '1') }}">
                    </div>

                    <div class="mb-3">
                        <label for="speed" class="form-label">Velocità</label>
                        <input type="number" min="0" max="999" step="1" name="speed"
                            class="form-control input-weapon" id="speed" placeholder="inserisci il valore di velocità"
                            value="{{ old('speed', '1') }}">
                    </div>

                    <div class="mb-3">
                        <label for="life" class="form-label">Vita</label>
                        <input type="number" min="0" max="999" step="1" name="life"
                            class="form-control input-weapon" id="life" placeholder="inserisci il valore della vita"
                            value="{{ old('life', '1') }}">
                    </div>

                    <div class="my-3">
                        <div class="form-label">Armi</div>
                        @dump($weapons)
                        <div class="d-flex flex-wrap gap-3">
                            @foreach ($weapons as $weapon)
                                @php
                                    $arr_weapons = old('weapons', null);
                                    $value_weapon = '';
                                    if ($arr_weapons != null) {
                                        $value_weapon = $arr_weapons[$loop->index];
                                    } else {
                                        $value_weapon = '0';
                                    }
                                @endphp
                                <div>
                                    <label for="{{ 'lab_' . $loop->index }}" class="bg-dark p-2 rounded d-inline-block">
                                        <img src="{{ Vite::asset($weapon->image) }}" alt="" width="30px">
                                    </label>
                                    <input type="checkbox" class="d-none" id="{{ 'lab_' . $loop->index }}">
                                    <input type="number" class="input-checkbox" name="weapons[]"
                                        id="weapons-{{ $weapon->id }}" value="{{ $value_weapon }}">
                                </div>
                            @endforeach

                        </div>
                    </div>




                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control  input-weapon" name="description" id="description" rows="3"
                            placeholder="Descrizione del personaggio">{{ old('description') }}</textarea>
                    </div>

                    <button class="btn bg-orange text-black">Crea</button>
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
