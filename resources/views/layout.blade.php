<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <header>
            @include('componentes.nav_bar')
        </header>
        <main>
            @yield('contenido')
        </main>
        <footer>
            @include('componentes.footer')
        </footer>
    </body>
</html>