<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professor;

// php artisan make:controller Professor/ProfessorController

class ProfessorController extends Controller
{
    public function Index()
    {
        return view('paginasIniciais.professor');
        
    }

    public function create(Request $request)
    {
        
        // opção 1 (metodo GET)
        // $dados = $request->all();
        // $nome = $dados['nome'];
        // $telefone = $dados['telefone'];

        // opção 2 (metodo GET)
        // $nome = $request->query('nome');
        // $telefone = $request->query('telefone');

        // opção 3 (metodo POST)
        $dados = [
            'nome'=> $request->input('nome'),
            'telefone'=> $request->input('telefone'),
        ];

        $professor = new Professor();
        $professor->nome = $request->input('nome');
        $professor->telefone = $request->input('telefone');
        $professor->save();

        return view('cadastro.cadastroProfessor');
    }

    public function showAll()
    {
        $professores = Professor::all();

        return view('tabelas.professor', compact('professores'));
    }

    public function show(string $id)
    {
        //
    }

    public function showId($id)
    {
        return Professor::find($id);
    }

    public function postLista()
    {
        return "POST: Lista de Professor";
    }
}
