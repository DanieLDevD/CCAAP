@extends('layouts.app')

@section('content')
    <h2>Login</h2>

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Lembrar-me</label>
        </div>

        <button type="submit">Entrar</button>
    </form>
@endsection

