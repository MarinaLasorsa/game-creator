@extends('layouts.app')

@section('title', 'Type')

@section('content')

@foreach ( $types as $type )
<div class="container d-flex align-items-center">

 <a style="width: 100%" href="{{route('admin.types.show',$type)}}"><img style="width: 100%" src="{{Vite::asset($type->img_carosel)}}" alt=""></a>    

</div>
@endforeach


@endsection