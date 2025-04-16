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

    public function create()
    {
        
        return view('cadastro.cadastroProfessor');
    }

    public function store(Request $request)
    {
        
        // Validação básica (protege de dados inválidos ou campos vazios)
        $request->validate([
            'nome' => 'required|string|max:128',
            'telefone' => 'required|string|max:20',
        ]);
        
        $dados = [
            'nome'=> $request->input('nome'),
            'telefone'=> $request->input('telefone'),
        ];

        $professor = new Professor();
        $professor->nome = $request->input('nome');
        $professor->telefone = $request->input('telefone');
        $professor->save();

        return redirect()->back()->with('success', 'Professor cadastrado com sucesso!');
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
