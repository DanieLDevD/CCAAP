<?php

namespace App\Http\Controllers;

use App\Models\Bird;
use Illuminate\Http\Request;

class BirdController extends Controller
{
    public function create()
    {
        return view('dashboard.birds.create');
    }

    public function destroy(Bird $bird)
    {
        $bird->delete();
        return redirect()->back();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'especie' => 'required|string',
            'anilha' => 'required|string',
            'anilha_legal' => 'required|string',
            'data_nascimento' => 'required|date',
            'sexo' => 'required|in:Macho,Fêmea,Indefinido',
        ]);

        $bird = new Bird();
        $bird->nome = $request->nome;
        $bird->especie = $request->especie;
        $bird->anilha = $request->anilha;
        $bird->anilha_legal = $request->anilha_legal;
        $bird->data_nascimento = $request->data_nascimento;
        $bird->sexo = $request->sexo;
        $bird->mae = $request->mae;
        $bird->pai = $request->pai;
        $bird->pat_grandfather = $request->pat_grandfather;
        $bird->pat_grandmother = $request->pat_grandmother;
        $bird->mat_grandfather = $request->mat_grandfather;
        $bird->mat_grandmother = $request->mat_grandmother;
        $bird->user_id = auth()->user()->id; // Vincula o pássaro ao usuário logado
        $bird->save();

        return redirect()->route('dashboard.index')->with('success', 'Pássaro cadastrado com sucesso!');
    }

    public function update(Request $request, Bird $bird)
    {
        $request->validate([
            'nome' => 'required|string',
            'especie' => 'required|string',
            'anilha' => 'required|string',
            'anilha_legal' => 'required|string',
            'data_nascimento' => 'required|date',
            'sexo' => 'required|in:Macho,Fêmea,Indefinido',
        ]);

        $bird->nome = $request->nome;
        $bird->especie = $request->especie;
        $bird->anilha = $request->anilha;
        $bird->anilha_legal = $request->anilha_legal;
        $bird->data_nascimento = $request->data_nascimento;
        $bird->sexo = $request->sexo;
        $bird->mae = $request->mae;
        $bird->pai = $request->pai;
        $bird->pat_grandfather = $request->pat_grandfather;
        $bird->pat_grandmother = $request->pat_grandmother;
        $bird->mat_grandfather = $request->mat_grandfather;
        $bird->mat_grandmother = $request->mat_grandmother;
        $bird->save();

        return redirect()->route('dashboard.index')->with('success', 'Cadastro de pássaro atualizado com sucesso!');
    }

    public function edit(Bird $bird)
    {
        return view('dashboard.birds.edit', compact('bird'));
    }

    /*
    public function pesquisar(Request $request)
    {
        $termo = $request->input('termo');

        // Faça a lógica de pesquisa aqui e retorne os resultados para a view

        return view('search.resultados', compact('resultados'));
    } */
}
