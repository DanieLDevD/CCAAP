@extends('layouts.app')
@section('content')

<!-- Navbar -->
<nav class="bg-green-800 py-4 px-6">
    <div class="container mx-auto flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold mb-4 text-white">Árvore Genealógica</h1>
        </div>
        <div>
            <a href="{{ route('dashboard.index') }}" class="text-gray-300 ml-4 inline-block border border-green-300 px-4 py-2 rounded-lg hover:bg-green-300 hover:text-white">Voltar à Página Principal</a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="py-4 px-4">
        <table>
            <tbody>
                <tr class="flex flex-col h-10 bg-slate-700">
                    <td class="px-4 py-2 text-center">Nome:</td>
                    <td class="px-4 py-2 text-center">Sexo:</td>
                    <td class="px-4 py-2 text-center">Avó:</td>
                    <td class="px-4 py-2 text-center">Avô:</td>
                    <td class="px-4 py-2 text-center">Mãe:</td>
                    <td class="px-4 py-2 text-center">Pai:</td>
                    <td class="px-4 py-2 text-center">Irmãos:</td>
                    <td class="px-4 py-2 text-center">Conjugue:</td>
                    <td class="px-4 py-2 text-center">Filhotes:</td>
                    <td class="px-4 py-2 text-center">
                        <a href="" class="text-blue-500 hover:text-blue-700">Editar</a>
                    </td>
                </tr>
            </tbody>
        </table>        
    </div>
</div>
@endsection