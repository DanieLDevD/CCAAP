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
        $user = User::find(Auth::id()); // Procura o usuário autenticado no BD
        $names = explode(' ', $user->name); // Divide o nome completo
        $compoundName = implode(' ', array_slice($names, 0, 2)); // Obtém os 2 primeiros nomes

        $birds = Bird::where('user_id', Auth::id())->get(); // Filtra as aves pelo ID do usuário autenticado

        return view('dashboard.index', compact('compoundName', 'birds'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
