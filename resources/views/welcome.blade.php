<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>
    <body class="antialiased">
        <form action="/guardafoto" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="nombre"><br>
            <input type="file" name="imagen" id=""><br>
            <input type="submit" value="Guardar">
        </form>

        @foreach ($datos as $dato )
            <img width="200px" src="/storage/{{$dato->almacenamiento}}" alt=""> <br>
        @endforeach

    </body>
</html>
