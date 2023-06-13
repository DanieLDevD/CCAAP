@extends('layouts.app')

@section('content')

<div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold mb-4">Editar Cadastro de Pássaro</h2>
        <form action="{{ route('birds.update', $bird->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nome" class="block text-gray-700 font-bold mb-2">Nome:</label>
                <input type="text" id="nome" name="nome" value="{{ $bird->nome }}" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="especie" class="block text-gray-700 font-bold mb-2">Espécie:</label>
                <input type="text" id="especie" name="especie" value="{{ $bird->especie }}" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="anilha" class="block text-gray-700 font-bold mb-2">Anilha:</label>
                <input type="text" id="anilha" name="anilha" value="{{ $bird->anilha }}" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="anilha_legal" class="block text-gray-700 font-bold mb-2">Anilha Legal:</label>
                <input type="text" id="anilha_legal" name="anilha_legal" value="{{ $bird->anilha_legal }}" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="data_nascimento" class="block text-gray-700 font-bold mb-2">Data de Nascimento:</label>
                <input type="date" id="data_nascimento" name="data_nascimento" value="{{ $bird->data_nascimento }}" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="sexo" class="block text-gray-700 font-bold mb-2">Sexo:</label>
                <select name="sexo" id="sexo" required class="w-full px-3 py-2 border rounded">
                    <option value="Macho">Macho</option>
                    <option value="Fêmea">Fêmea</option>
                    <option value="Indefinido">Indefinido</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="mae" class="block text-gray-700 font-bold mb-2">Mãe:</label>
                <input type="text" id="mae" name="mae" value="{{ $bird->mae }}" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="pai" class="block text-gray-700 font-bold mb-2">Pai:</label>
                <input type="text" id="pai" name="pai" value="{{ $bird->pai }}" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="pai" class="block text-gray-700 font-bold mb-2">Avô Paterno</label>
                <input type="text" id="pat_grandfather" name="pat_grandfather" value="{{ $bird->pat_grandfather }}" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>


            <div class="mb-4">
                <label for="pai" class="block text-gray-700 font-bold mb-2">Avó Paterno</label>
                <input type="text" id="pat_grandmother" name="pat_grandmother" value="{{ $bird->pat_grandmother }}" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="pai" class="block text-gray-700 font-bold mb-2">Avô Materno</label>
                <input type="text" id="mat_grandfather" name="mat_grandfather" value="{{ $bird->mat_grandfather }}" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="pai" class="block text-gray-700 font-bold mb-2">Avó Materno</label>
                <input type="text" id="mat_grandmother" name="mat_grandmother" value="{{ $bird->mat_grandmother }}" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="flex justify-between items-center mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">Atualizar</button>
                <a href="{{ route('dashboard.index') }}" class="text-blue-500 hover:underline">Voltar para a Dashboard</a>
            </div>
        </form>
    </div>
</div>

@endsection