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
        
        // opção 1
        $dados = $request->all();

        $nome = $dados['nome'];
        $telefone = $dados['telefone'];

        // opção 2
        $nome = $request->query('nome');
        $telefone = $request->query('telefone');

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
