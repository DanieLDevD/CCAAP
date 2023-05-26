@extends('layouts.app')
<script src="https://cdn.tailwindcss.com"></script>
@section('content')
    <div class="max-w-md mx-auto">
        <h2 class="text-2xl font-bold mb-4">Login</h2>

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

            <div class="mb-4 flex items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Lembrar-me</label>
            </div>

            <div class="mt-4 text-center">
                <a href="{{ route('welcome') }}" class="text-blue-500 hover:text-blue-700 underline">Voltar para a página inicial</a>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Entrar</button>
        </form>
    </div>
@endsection
