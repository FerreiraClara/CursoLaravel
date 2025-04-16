<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professor;
use Illuminate\Support\Facades\Hash;

// php artisan make:controller Professor/ProfessorController

class ProfessorController extends Controller
{
    public function Index()
    {
        return view('paginasIniciais.professor');
        
    }

    public function create()
    {
        
        return view('formularios.cadastroProfessor');
    }

    public function store(Request $request)
    {
        
        // Validação básica (protege de dados inválidos ou campos vazios)
        $request->validate([
            'nome' => 'required|string|max:128',
            'email' => 'required|string',
            'telefone' => 'required|string|max:20',
            'senha' => 'required|string|max:128',
            'confirmaSenha' => 'required|string|max:128',
            'nivelAcesso' => 'required|int|max:128',
        ]);
        

        $professor = new Professor();
        $professor->nome = $request->input('nome');
        $professor->email = $request->input('email');
        $professor->telefone = $request->input('telefone');
        $professor->nivelAcesso = $request->input('nivelAcesso');

        // dd($request->all());

        if ($request->input('senha') == $request->input('confirmaSenha')){
            $professor->senha = Hash::make($request->input('senha'));
            $professor->save();

            return redirect()->back()->with('success', 'Professor cadastrado com sucesso!');
        
        } else{
            return redirect()->back()->with('success','As senhas são diferentes');
            
        }
        

        
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
