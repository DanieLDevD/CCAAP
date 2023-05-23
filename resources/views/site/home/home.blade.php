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
                <button type="submit">Menu</button>
                <button type="submit">Cadastrar ave</button>
                <input type="search" name="Pesquisar" id="" placeholder="Pesquisar">
            </div>
                        
            <form action="home" method="POST" class="content">
                <h1>Pássaros</h1>
                    
                <div>
                    <img src="https://play-lh.googleusercontent.com/pe5BxWsUls5cHBAImcv_PRQ8Qr4XBPTCmQ9on5YaNBbwzPAU1qfOgMk3g6L86BDbNms=s256-rw" alt="">
                    <h5>Passaro</h5>
                    <button type="submit">Editar</button>
                    <button type="submit">Excluir</button>
                </div>
            </form>

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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reg as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->nome}}</td>
                            <td>{{$item->anilha}}</td>
                            <td>{{$item->anilhalegal}}</td>
                            <td>{{$item->especie}}</td>
                            <td>{{$item->datanasc}}</td>
                            <td>{{$item->sexo}}</td>
                            <td>{{$item->pai}}</td>
                            <td>{{$item->mae}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </form> 
        </div>
    </body>
</html>
