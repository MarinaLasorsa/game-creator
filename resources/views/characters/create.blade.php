@extends('layouts.app')

@section('title', 'inserisci un nuovo personaggio')

@section('content')

    <main>
        <section>
            
            <div class="container">
                <form action="{{ route('characters.store') }}" method="POST">

                    {{-- Cross Site Request Forgering --}}
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="inserisci il nome" value="{{old('name')}}">
                    </div>



                    <div class="mb-3">
                        <label for="attack" class="form-label">Attacco</label>
                        <input type="number" min="0" max="999" step="1" name="attack" class="form-control" id="attack" placeholder="inserisci il valore di attacco" value="{{old('attack')}}">
                    </div>

                    <div class="mb-3">
                        <label for="defence" class="form-label">Difesa</label>
                        <input type="number" min="0" max="999" step="1" name="defence" class="form-control" id="defence"
                            placeholder="inserisci il valore di difesa" value="{{old('defence')}}">
                    </div>

                    <div class="mb-3">
                        <label for="speed" class="form-label">Velocità</label>
                        <input type="number" min="0" max="999" step="1" name="speed" class="form-control" id="speed"
                            placeholder="inserisci valore di velocità" value="{{old('speed')}}">
                    </div>

                    <div class="mb-3">
                        <label for="life" class="form-label">Vita</label>
                        <input type="number" min="0" max="999" step="1" name="life" class="form-control" id="life"
                            placeholder="inserisci il valore della vità" value="{{old('life')}}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrizione del personaggio" >{{old('description')}}</textarea>
                    </div>

                    <button class="btn btn-primary">Crea</button>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error )

                            <li>
                                {{$error}}
                            </li>
                                
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </section>
    </main>

@endsection