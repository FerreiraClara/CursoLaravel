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
        $dados = $request->all();

        print_r($dados);

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
