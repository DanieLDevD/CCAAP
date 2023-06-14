<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>CCAAP</title>
</head>

<body class="bg-green-600">
    <header>
        <!-- Adicione aqui o código do cabeçalho -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-800 py-0.1">
        <div class="container mx-auto flex items-center justify-between">
            <div class="w-16 ">
                @include('components.icons.logoprojectwhite')
            </div>
            <div>
                <h4 class="text-white text-lg font-bold">Inicio</h4>
                <a href="{{ route('welcome') }}" class="text-gray-300 hover:text-white">Home</a>
            </div>
            <div>
                <h4 class="text-white text-lg font-bold">Suporte</h4>
                <a href="#" class="text-gray-300 hover:text-white">FAQ</a>
            </div>
            <div class="flex justify-between w-20 space-x-2">
                <a href="https://instagram.com/victor_prudente27?igshid=NGExMmI2YTkyZg==" target="_blank" rel="noopener noreferrer">
                    @include('components.icons.instagram')
                </a>
                <a href="https://github.com/DanieLDevD/CCAAP/tree/main" target="_blank" rel="noopener noreferrer">
                    @include('components.icons.github')
                </a>
                <a href="https://www.linkedin.com/in/victor-prudente/" target="_blank" rel="noopener noreferrer">
                    @include('components.icons.linkedin')
                </a>
            </div>
        </div>
        <div class="text-center mt-4 text-gray-300 text-sm">
            © 2023 CCAAP. Todos os direitos reservados.
        </div>
        <!-- Adicione aqui o código do rodapé -->
    </footer>
</body>

</html>