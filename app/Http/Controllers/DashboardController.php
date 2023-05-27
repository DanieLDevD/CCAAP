<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Bird;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id()); // procura o usuário 'ID' autenticado no bd para retornar
        $names = explode(' ', $user->name); // Divide o nome completo
        $compoundName = implode(' ', array_slice($names, 0, 2)); // Obtem os 2 primeiros nomes

        $birds = Bird::all(); // ou qualquer outra forma de obter a coleção de aves cadastradas

        return view('dashboard.index', compact('compoundName', 'birds'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
