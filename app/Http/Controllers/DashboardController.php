<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id()); // procura o usuário 'ID' autenticado no bd para retornar
        $nomeUser = $user->name; // retorna na variavel o nome do usuário.

        return view('dashboard.index', compact('nomeUser'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
