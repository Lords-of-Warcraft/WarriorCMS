<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('warriorcms.website_name') }} @yield('title')</title>
        <script src="https://cdn.jsdelivr.net/gh/steinhaug/feathericons-forkitup-edition@4.28.0-fu-edition/dist/feather.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        {{-- Laravel Mix - CSS File --}}
        <link rel="stylesheet" href="{{ mix('css/installer.css') }}"> 
        {{-- Laravel Mix - JS File --}}
        <script src="{{ mix('js/installer.js') }}"></script>

    </head>
    <body>

        @section('index')
        @show

        <h1 class="poppins headline" style="color:white;">WarriorCMS by DuelistRag3</h1>
        <x-installer::app-logo />

        <div class="container">
            @yield('content')
        </div>
        <script>
            feather.replace()
        </script>
        @include('sweetalert::alert')
    </body>
</html>
