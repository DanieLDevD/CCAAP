@extends('layouts.app')
@section('content')

<!-- Navbar -->

<body>
    <div class="flex flex-col min-h-screen">
        <nav class="bg-gray-900 py-4 px-6">
            <div class="container mx-auto flex justify-between items-center">
                <div class="flex items-center">
                    @include('components.icons.logotree')
                    <h1 class="text-2xl font-bold mb-4 text-white ml-4">Árvore Genealógica</h1>
                </div>
                <div>
                    <a href="{{ route('dashboard.index') }}" class="text-gray-300 ml-4 inline-block border border-green-300 px-4 py-2 rounded-lg hover:bg-green-300 hover:text-white">Voltar à Página Principal</a>
                </div>
            </div>
        </nav>
        <div class="container mx-auto py-4 px-4">
            <div class="flex items-center justify-center">
                <div class="w-10/12 mx-auto">
                    <div class="relative">
                        <table class="w-full bg-white shadow-md rounded">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="py-2 px-4 text-center">Ave</th>
                                    <th class="py-2 px-4 text-center">Sexo</th>
                                    <th class="py-2 px-4 text-center">Mãe</th>
                                    <th class="py-2 px-4 text-center">Pai</th>
                                    <th class="py-2 px-4 text-center">Avô Paterno</th>
                                    <th class="py-2 px-4 text-center">Avó Paterno</th>
                                    <th class="py-2 px-4 text-center">Avô Materno</th>
                                    <th class="py-2 px-4 text-center">Avó Materno</th>
                                    <th class="py-2 px-4 text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($birds as $bird)
                                <tr>
                                    <td class="py-2 px-4 text-center">{{ $bird->nome }}</td>
                                    <td class="py-2 px-4 text-center">{{ $bird->sexo }}</td>
                                    <td class="py-2 px-4 text-center">{{ $bird->mae }}</td>
                                    <td class="py-2 px-4 text-center">{{ $bird->pai }}</td>
                                    <td class="py-2 px-4 text-center">{{ $bird->pat_grandfather }}</td>
                                    <td class="py-2 px-4 text-center">{{ $bird->pat_grandmother }}</td>
                                    <td class="py-2 px-4 text-center">{{ $bird->mat_grandfather }}</td>
                                    <td class="py-2 px-4 text-center">{{ $bird->mat_grandmother }}</td>
                                    <td class="py-2 px-4 text-center">
                                        <!-- Botões ou ações adicionais aqui -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection