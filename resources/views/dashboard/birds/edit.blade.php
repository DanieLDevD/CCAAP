@extends('layouts.app')

@section('content')
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold mb-4">Editar Cadastro de Pássaro</h2>
        <form action="{{ route('birds.update', $bird->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nome" class="block text-gray-700 font-bold mb-2">Nome:</label>
                <input type="text" id="nome" name="nome" value="{{ $bird->nome }}" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="especie" class="block text-gray-700 font-bold mb-2">Espécie:</label>
                <input type="text" id="especie" name="especie" value="{{ $bird->especie }}" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="anilha" class="block text-gray-700 font-bold mb-2">Anilha:</label>
                <input type="text" id="anilha" name="anilha" value="{{ $bird->anilha }}" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="anilha_legal" class="block text-gray-700 font-bold mb-2">Anilha Legal:</label>
                <input type="text" id="anilha_legal" name="anilha_legal" value="{{ $bird->anilha_legal }}" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="data_nascimento" class="block text-gray-700 font-bold mb-2">Data de Nascimento:</label>
                <input type="text" id="data_nascimento" name="data_nascimento" value="{{ $bird->data_nascimento }}" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="sexo" class="block text-gray-700 font-bold mb-2">Sexo:</label>
                <input type="text" id="sexo" name="sexo" value="{{ $bird->sexo }}" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="mae" class="block text-gray-700 font-bold mb-2">Mãe:</label>
                <input type="text" id="mae" name="mae" value="{{ $bird->mae }}" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="pai" class="block text-gray-700 font-bold mb-2">Pai:</label>
                <input type="text" id="pai" name="pai" value="{{ $bird->pai }}" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">Atualizar</button>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
@endsection
