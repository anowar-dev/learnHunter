<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body class="antialiased">

        <h1>this is my home page</h1>

        <lu>
            <li><a href="{{ url('about') }}">Anout</a></li>
            <li><a href="{{ route('contact') }}">contact</a></li>
            <li><a href="{{ route('laravel') }}">Laravel</a></li>
        </lu>

    </body>
</html>
