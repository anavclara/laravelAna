<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
    </head>
        <body>
            PRODUTOS<br>

            <b>Nome:</b> {{ $produto->nome }}<br>
            <b>quantidade</b> {{ $produto->quantidade }}<br>
            <b>Valor</b> {{ $produto->valor }}<br>

        </body>
        


</html>