@extends('layouts.app')
<script src="https://cdn.tailwindcss.com"></script>
@section('content')
    <div class="flex justify-center items-center h-screen">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-md p-8">
            <div class="text-center">
                <h2 class="text-2xl font-bold mb-4">Seja Bem Vindo ao CCAAP</h2>
                <p class="text-gray-600">Uma aplicação web para facilitar o controle de pássaros!</p>
            </div>
            <div class="mt-8 flex justify-between">
                <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Entrar
                </a>
                <a href="{{ route('register') }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Cadastrar Conta
                </a>
            </div>
        </div>
    </div>
@endsection
