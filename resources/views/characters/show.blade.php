@extends('layouts.app')

@section('title', 'Laravel')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-auto">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center text-warning p-3">{{$character->name}}</h1>
                </div>
                <div class="card-body">
                <p class="card-text">{{$character->description}}</p>
                <p class="card-text">Attack: {{$character->attack}}</p>
                <p class="card-text">Defence: {{$character->defence}}</p>
                <p class="card-text">Speed: {{$character->speed}}</p>
                <p class="card-text">Life: {{$character->life}}</p>
                </div>
                <div id="form">
                <button class="btn btn-outline-danger" id="trash">trash</button>
                </div>
                <script>
                    let trash = document.getElementById('trash')

                    trash.addEventListener('click', function () {

                      let form = document.getElementById('form')

                      let trashConf = confirm('Sei sicuro di volere eliminare?')
                      if (trashConf === true) {

                        form.innerHTML += 
                        `
                          <form action="{{ route('characters.destroy',$character) }}" method="POST">
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