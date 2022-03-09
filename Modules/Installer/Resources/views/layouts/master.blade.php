<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('warriorcms.website_name') }} @yield('title')</title>
        <script src="https://cdn.jsdelivr.net/gh/steinhaug/feathericons-forkitup-edition@4.28.0-fu-edition/dist/feather.min.js"></script>

        {{-- Laravel Mix - CSS File --}}
        <link rel="stylesheet" href="{{ mix('css/installer.css') }}"> 

    </head>
    <body>
        @section('index')

        @show

        <div class="container">
            @yield('content')
        </div>
        <script>
            feather.replace()
        </script>
        {{-- Laravel Mix - JS File --}}
        <script src="{{ mix('js/installer.js') }}"></script>
    </body>
</html>
