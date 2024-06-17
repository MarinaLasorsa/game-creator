<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/img/utility/favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/5e4eaeffdb.js" crossorigin="anonymous"></script>

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body class="bg-black">
    <div id="app">

        @auth
        @include('partials/header') 
        @else
        @include('partials/gest_header') 
        @endif
        <main class="">
            @yield('content')
        </main>
    </div>
</body>

</html>
