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
                    </tbody>
                </table>
            </form> 
        </div>
    </body>
</html>
