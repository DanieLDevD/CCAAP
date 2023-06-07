@extends('layouts.app')
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
