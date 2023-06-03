<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('dashboard.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // CORRETA autenticação
            return redirect()->intended('/dashboard');
        } else {
            // FALHA autenticação
            return back()->withErrors([
                'email' => 'Credencial inválidas',
            ]);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
