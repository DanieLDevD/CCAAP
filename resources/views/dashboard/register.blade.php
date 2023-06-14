@extends('layouts.app')
<div class="flex items-center justify-center h-screen">
    <div class="bg-slate-100 p-4 rounded-md max-w-md w-full mx-auto">
        <div class="text-center mb-4">
            <h2 class="text-2xl font-bold mb-4 text-center">Cadastre uma Conta</h2>
        </div>
        <form method="POST" action="{{ route('register') }}" class="max-w-md w-full mx-auto">
            @csrf

            <div class="mb-4">
                <label for="name" class="block mb-1">Nome</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus class="w-full px-3 py-2 border rounded">
                @error('name')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block mb-1">E-mail</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required class="w-full px-3 py-2 border rounded">
                @error('email')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block mb-1">Senha</label>
                <input type="password" name="password" id="password" required class="w-full px-3 py-2 border rounded">
                @error('password')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block mb-1">Confirmar senha</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required class="w-full px-3 py-2 border rounded">
            </div>

            <div class="mb-4 flex items-center justify-between">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Cadastrar</button>
                <a href="{{ route('welcome') }}" class="text-blue-500 hover:text-blue-700 underline">Voltar para a página inicial</a>
            </div>

        </form>
    </div>
</div>