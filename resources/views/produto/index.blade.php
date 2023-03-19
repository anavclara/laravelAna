<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
        <body>
            PRODUTOS<br>
            <a href="{{url ('produto/create')}}">Criar</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
        <table>
            <tr>
                <th>Nome</th>
                <th>Ação</th>
            </tr>
            @foreach ($produtos as $value)
            <tr>
                <td>{{$value->nome}}</td>
                 <td><a href="{{ url('produto/' . $value->id) }}">Visualizar</a></td>
                
            </tr>
            @endforeach
        </table>
        </body>
        


</html>
