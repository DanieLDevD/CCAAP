<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class CadastrarPassaros extends Controller
{
    public function create()
    {
        return view('site.cadastrar.cadastrarpassaros');
    }

    public function mostrarHome()
    {
        return view('home.home');
    }

    public function registrarPassaro(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'anilha' => 'required',
            'anilhalegal' => 'required',
            'especie' => 'required',
            'nasc' => 'required',
            'sexo' => 'required',
            'pai' => 'required',
            'mae' => 'required',
        ]);

        $passaro = new CadastrarPassaros();
        $passaro->nome = $request->nome;
        $passaro->anilha = $request->anilha;
        $passaro->anilhalegal = $request->anilhalegal;
        $passaro->especie = $request->especie;
        $passaro->nasc = $request->nasc;
        $passaro->sexo = $request->sexo;
        $passaro->pai = $request->pai;
        $passaro->mae = $request->mae;
        $passaro->save();

        return Redirect::route('home');
    }
}