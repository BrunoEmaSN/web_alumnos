<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
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