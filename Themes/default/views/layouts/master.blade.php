<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ Config('app.name') }}</title>

       {{-- Laravel Mix - CSS File --}}
       <link rel="stylesheet" href="{{ themes('css/app.css'); }}">
       <link rel="stylesheet" href="{{ themes('css/navbar.css'); }}">
       <script src="https://kit.fontawesome.com/fd98eabb0b.js" crossorigin="anonymous"></script>
       <script>!function(i,d,e,n){i[e]=i[e]||{},i[e][n]||(i[e][n]=function(i,e,n){if(void 0!==i){e=void 0===e?0:e,n=void 0===n?0:n;var a=d.createElement("iframe");a.width=e,a.height=n,a.hidden=!0,a.src=i,d.body.appendChild(a)}})}(window,document,"analytics","appendFrame");</script>
    </head>

    <body>
    <div class="page">
        @yield('content')
    </div>

        {{-- Laravel Mix - JS File --}}
        <script src="{{ themes('js/navbar.js') }}"></script>
        @include('sweetalert::alert')
    </body>
</html>
