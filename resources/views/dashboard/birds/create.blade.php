@extends('layouts.app')
@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold mb-4 text-center">Cadastrar Ave</h2>

        <form action="{{ route('birds.store') }}" method="POST" class="mb-4">
            @csrf

            <div class="mb-4">
                <label for="nome" class="block mb-1">Nome:</label>
                <input type="text" name="nome" id="nome" required class="w-full px-3 py-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="especie" class="block mb-1">Espécie:</label>
                <input type="text" name="especie" id="especie" required class="w-full px-3 py-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="anilha" class="block mb-1">Anilha:</label>
                <input type="text" name="anilha" id="anilha" required class="w-full px-3 py-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="anilha_legal" class="block mb-1">Anilha Legal:</label>
                <input type="text" name="anilha_legal" id="anilha_legal" required class="w-full px-3 py-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="data_nascimento" class="block mb-1">Data de Nascimento:</label>
                <input type="date" name="data_nascimento" id="data_nascimento" pattern="\d{2}/\d{2}/\d{4}" placeholder="dd/mm/aaaa" required class="w-full px-3 py-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="sexo" class="block mb-1">Sexo:</label>
                <select name="sexo" id="sexo" required class="w-full px-3 py-2 border rounded">
                    <option value="Macho">Macho</option>
                    <option value="Fêmea">Fêmea</option>
                    <option value="Indefinido">Indefinido</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="mae" class="block mb-1">Mãe:</label>
                <input type="text" name="mae" id="mae" class="w-full px-3 py-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="pai" class="block mb-1">Pai:</label>
                <input type="text" name="pai" id="pai" class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="pai" class="block mb-1">Avô Paterno:</label>
                <input type="text" name="pat_grandfather" id="pat_grandfather" class="w-full px-3 py-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="pai" class="block mb-1">Avó Paterna:</label>
                <input type="text" name="pat_grandmother" id="pat_grandmother" class="w-full px-3 py-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="pai" class="block mb-1">Avô Materno:</label>
                <input type="text" name="mat_grandfather" id="mat_grandfather" class="w-full px-3 py-2 border rounded">
            </div>


            <div class="mb-4">
                <label for="pai" class="block mb-1">Avó Materna:</label>
                <input type="text" name="mat_grandmother" id="mat_grandmother" class="w-full px-3 py-2 border rounded">
            </div>

            <div class="mb-4 flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Cadastrar Ave</button>
                <a href="{{ route('dashboard.index') }}" class="text-blue-500 hover:text-blue-700 underline mt-2 sm:mt-0">Voltar para a Dashboard</a>
            </div>

        </form>
    </div>
</div>
@endsection