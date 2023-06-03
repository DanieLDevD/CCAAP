@extends('layouts.app')

@section('content')

<body>
    <div class="flex flex-col min-h-screen">
        <!-- Navbar -->
        <nav class="bg-green-800  py-4 px-6">
            <div class="container mx-auto flex justify-between items-center">
                <div>
                    <h3 class="text-2xl font-bold mb-4 text-white"> Olá <span class="text-blue-500 hover:text-blue-700">{{ $compoundName }}</span>. Bem Vindo ao CCAAP!</h2>
                </div>
                <div>
                    <a href="{{ route('birds.create') }}" class="text-gray-300 mr-4">Cadastrar Ave</a>
                    <a href="#" class="text-gray-300 mr-4">Árvore Genealógica</a>
                    <form action="{{ route('birds.search') }}" method="GET" class="inline-block">
                        <input type="text" placeholder="Pesquisar Ave" class="px-4 py-2 rounded-lg  focus:ring-blue-500 text-black" name="pesquisa" id="">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg ml-2">Pesquisar</button>
                    </form>
                    <a href="{{ route('logout') }}" class="text-gray-300 ml-4 inline-block border border-green-300 px-4 py-2 rounded-lg hover:bg-green-300 hover:text-white">Sair</a>
                </div>
            </div>
        </nav>

        <!-- Body -->
        <div class="container mx-auto mt-8">
            <h2 class="text-2xl font-bold mb-4">Lista de Aves Cadastradas</h2>
            <table class="min-w-full border border-gray-200 rounded-lg">
                <thead>
                    <tr>
                        <th class="px-4 py-2 bg-green-200 text-green-800 text-center">Nome</th>
                        <th class="px-4 py-2 bg-green-200 text-green-800 text-center">Espécie</th>
                        <th class="px-4 py-2 bg-green-200 text-green-800 text-center">Anilha</th>
                        <th class="px-4 py-2 bg-green-200 text-green-800 text-center">Anilha Legal</th>
                        <th class="px-4 py-2 bg-green-200 text-green-800 text-center">Data de Nascimento</th>
                        <th class="px-4 py-2 bg-green-200 text-green-800 text-center">Sexo</th>
                        <th class="px-4 py-2 bg-green-200 text-green-800 text-center">Mãe</th>
                        <th class="px-4 py-2 bg-green-200 text-green-800 text-center">Pai</th>
                        <th class="px-4 py-2 bg-green-200 text-green-800 text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($birds as $bird)
                    <tr>
                        <td class="px-4 py-2 text-center">{{ $bird->nome }}</td>
                        <td class="px-4 py-2 text-center">{{ $bird->especie }}</td>
                        <td class="px-4 py-2 text-center">{{ $bird->anilha }}</td>
                        <td class="px-4 py-2 text-center">{{ $bird->anilha_legal }}</td>
                        <td class="px-4 py-2 text-center">{{ date('d/m/Y', strtotime($bird->data_nascimento)) }}</td>
                        <td class="px-4 py-2 text-center">{{ $bird->sexo }}</td>
                        <td class="px-4 py-2 text-center">{{ $bird->mae }}</td>
                        <td class="px-4 py-2 text-center">{{ $bird->pai }}</td>
                        <td class="px-4 py-2 text-center">
                            <a href="{{ route('birds.edit', $bird) }}" class="text-blue-500 hover:text-blue-700">Editar</a>
                            <form action="{{ route('birds.destroy', $bird->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="ml-2 bg-red-500 px-4 py-2 rounded-lg">Excluir</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
@endsection