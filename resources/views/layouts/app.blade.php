<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            a{
                text-decoration: none;
                color: black;
            }
        </style>
        <title>{{config('app.name', 'Hipoteca App')}}</title>
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.mensajes')
            @yield('content')
        </div>
    </body>
</html>
