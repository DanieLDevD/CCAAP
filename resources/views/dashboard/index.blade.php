<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex flex-col min-h-screen">
        <!-- Navbar -->
        <nav class="bg-gray-800 text-white py-4 px-6">
            <div class="container mx-auto flex justify-between items-center">
                <div>
                    <a href="#" class="text-xl font-bold">Logo</a>
                </div>
                <div>
                    <a href="#" class="text-gray-300 mr-4">Cadastrar Ave</a>
                    <a href="#" class="text-gray-300 mr-4">Árvore Genealógica</a>
                    <form action="#" class="inline-block">
                        <input type="text" placeholder="Pesquisar Ave" class="px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg ml-2">Pesquisar</button>
                    </form>
                </div>
            </div>
        </nav>
        
        <!-- Body -->
        <div class="container mx-auto mt-8">
            <h2 class="text-2xl font-bold mb-4">Lista de Aves Cadastradas</h2>
            <ul class="border border-gray-200 rounded-lg">
                <!-- Iterar e exibir a lista de aves cadastradas aqui -->
                <li class="px-4 py-2">Ave 1</li>
                <li class="px-4 py-2">Ave 2</li>
                <li class="px-4 py-2">Ave 3</li>
            </ul>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
