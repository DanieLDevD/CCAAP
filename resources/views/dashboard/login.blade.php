@extends('layouts.app')
@section('content')
<div class="flex items-center justify-center h-screen">
    <div class=" bg-slate-100 p-4 rounded-md max-w-md w-full mx-auto">
        <h2 class="text-2xl font-bold mb-4 text-center">Login</h2>

        <form action="{{ route('login') }}" method="POST" class="mb-4">
            @csrf

            <div class="mb-4">
                <label for="email" class="block mb-1">E-mail:</label>
                <input type="email" name="email" id="email" required class="w-full px-3 py-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="password" class="block mb-1">Senha:</label>
                <input type="password" name="password" id="password" required class="w-full px-3 py-2 border rounded">
            </div>

            <div class="mb-4 flex items-center justify-between">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Entrar</button>
                <a href="{{ route('welcome') }}" class="text-blue-500 hover:text-blue-700 underline">Voltar para a página inicial</a>
            </div>

        </form>
    </div>

</div>

@endsection