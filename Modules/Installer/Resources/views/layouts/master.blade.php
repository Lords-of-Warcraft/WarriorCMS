<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME') }} Installer</title>
        <script src="https://cdn.jsdelivr.net/gh/steinhaug/feathericons-forkitup-edition@4.28.0-fu-edition/dist/feather.min.js"></script>

        {{-- Laravel Mix - CSS File --}}
        <link rel="stylesheet" href="{{ mix('css/installer.css') }}"> 

    </head>
    <body>
        @yield('darkmodeslider')
        @yield('content')
        @yield('menu')

        <script>
            const list = document.querySelectorAll('.list');
            function activeLink(){
                list.forEach((item) => 
                item.classList.remove('active'));
                this.classList.add('active');
            }
            list.forEach((item) => 
            item.addEventListener('click',activeLink));
        </script>
        <script>
            feather.replace()
        </script>
        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/installer.js') }}"></script> --}}
    </body>
</html>