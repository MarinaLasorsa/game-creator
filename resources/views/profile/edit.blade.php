@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="d-flex flex-column align-items-center">
            <img class="bg-video" src="{{ Vite::asset('resources/img/bg/bg-1.png') }}" alt="">

            <h2 class="fs-4 text-white mt-5 my-4">
                {{ __('Profile') }}
            </h2>
            <div class="card p-4 mb-4 bg-transparent border-0">

                @include('profile.partials.update-profile-information-form')

            </div>

            <div class="card p-4 mb-4 bg-transparent border-0">


                @include('profile.partials.update-password-form')

            </div>

            <div class="card p-4 mb-4 bg-transparent border-0">


                @include('profile.partials.delete-user-form')

            </div>

        </div>

    </div>
@endsection
