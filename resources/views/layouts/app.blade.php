<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Devstagram - @yield('titulo')</title>
    </head>
    <body>
    <nav>
        <a href="/nosotros">Nosotros</a>
        <a href="/tienda">Tienda</a>
        <a href="/">Principal</a>
    </nav>
    <!-- dentro de h1 se encuentra una directiva que permite registrar h1 como un contenedor -->
        <h1>@yield('titulo')</h1>

        <hr> <!-- hr te imprime una linea -->

        <p>@yield('contenido')</p>

    </body>
</html>
