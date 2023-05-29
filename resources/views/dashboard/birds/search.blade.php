@extends('layouts.app')

@section('content')
<body>
    <div class="flex flex-col min-h-screen">
        <!-- Navbar -->
        <nav class="bg-green-800 text-white py-4 px-6">
            <div class="container mx-auto flex justify-between items-center">
                <div>
                    <h3 class="text-2xl font-bold mb-4"> Olá <span class="text-blue-500 hover:text-blue-700">{{ $compoundName }}</span>. Bem Vindo ao CCAAP!</h2>
                </div>
                <div>
                    <a href="{{ route('birds.create') }}" class="text-gray-300 mr-4">Cadastrar Ave</a>
                    <a href="#" class="text-gray-300 mr-4">Árvore Genealógica</a>
                    <form action="{{ route('pesquisar') }}" method="GET" class="inline-block">
                        <input type="text" placeholder="Pesquisar Ave" class="px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-black" name="termo" id="">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg ml-2">Pesquisar</button>
                    </form>
                    <a href="{{ route('logout') }}" class="text-gray-300 ml-4 inline-block border border-green-300 px-4 py-2 rounded-lg hover:bg-green-300 hover:text-white">Sair</a>
                </div>
            </div>
        </nav>

        <!-- Body -->
        <div class="container mx-auto mt-8">
            <h2 class="text-2xl font-bold mb-4">Lista de Aves Cadastradas</h2>
            @if (isset($resultados))
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
                    @foreach ($resultados as $resultado)
                    <tr>
                        <td class="px-4 py-2 text-center">{{ $resultado->nome }}</td>
                        <td class="px-4 py-2 text-center">{{ $resultado->especie }}</td>
                        <td class="px-4 py-2 text-center">{{ $resultado->anilha }}</td>
                        <td class="px-4 py-2 text-center">{{ $resultado->anilha_legal }}</td>
                        <td class="px-4 py-2 text-center">{{ date('d/m/Y', strtotime($resultado->data_nascimento)) }}</td>
                        <td class="px-4 py-2 text-center">{{ $resultado->sexo }}</td>
                        <td class="px-4 py-2 text-center">{{ $resultado->mae }}</td>
                        <td class="px-4 py-2 text-center">{{ $resultado->pai }}</td>
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
            @else
            <p>Nenhum resultado encontrado.</p>
            @endif
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
@endsection
