<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastre-se</title>
        <link rel="stylesheet" href="/css/cadastrarpassaros.css">

    </head>
    <body>
        <div class="content">
            <div class="form">
                <form action="cadastrarpassaros" method="post">
                    <h2>Cadastre seu pássaro:</h2>
                    <input type="text" name="nome" id="nome" placeholder="Nome">
                    <input type="text" name="anilha" id="anilha" placeholder="Anilha">
                    <input type="text" name="anilhalegal" id="anilhalegal" placeholder="Anilha legal">
                    <input type="text" name="especie" id="especie" placeholder="Espécie">
                    <input type="date" name="nasc" id="nasc" placeholder="Nascimento">
                    <input type="text" name="sexo" id="sexo" placeholder="Sexo">
                    <input type="text" name="pai" id="pai" placeholder="Pai">
                    <input type="text" name="mae" id="mae" placeholder="Mãe">
                    {{csrf_field()}}
                    <input type="submit" value="Enviar">
                </form>
            </div>
            
        </div>
    </body>
</html>
