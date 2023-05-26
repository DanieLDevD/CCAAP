
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/app.css"> 
    </head>
    <body class="">
        <div class="page">
            <div class="main">
                <a href="{{route('home')}}">Arvore Genealogica</a>
                <a href="{{route('cadastrarpassaros.index')}}">Cadastrar ave</a>
                <input type="search" name="Pesquisar" id="" placeholder="Pesquisar">
            </div>

            <form action="hometabela" method="post" class="footer">
                <table class="center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Anilha</th>
                            <th>Anilha Legal</th>
                            <th>Espécie</th>
                            <th>Data de Nascimento</th>
                            <th>Sexo</th>
                            <th>Pai</th>
                            <th>Mãe</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($passaros)
                        @foreach($passaros as $passaro)
                        <tr>
                            <td>{{ $passaro->id }}</td>
                            <td>{{ $passaro->nome }}</td>
                            <td>{{ $passaro->anilha }}</td>
                            <td>{{ $passaro->anilhalegal }}</td>
                            <td>{{ $passaro->especie }}</td>
                            <td>{{ $passaro->nasc }}</td>
                            <td>{{ $passaro->sexo }}</td>
                            <td>{{ $passaro->pai }}</td>
                            <td>{{ $passaro->mae }}</td>
                            <td>
                                <button type="submit">Editar</button>
                                <button type="submit">Excluir</button>
                            </td>
                        </tr>
                        @endforeach
                        @endisset
                    </tbody>
                </table>
            </form> 
        </div>
    </body>
</html>
