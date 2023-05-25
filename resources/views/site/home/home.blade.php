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
                <a href="{{route('cadastrarpassaros')}}">Cadastrar ave</a>
                <input type="search" name="Pesquisar" id="" placeholder="Pesquisar">
            </div>

            <form action="hometabela" method="POST" class="footer">
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button type="submit">Editar</button>
                                <button type="submit">Excluir</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form> 
        </div>
    </body>
</html>
