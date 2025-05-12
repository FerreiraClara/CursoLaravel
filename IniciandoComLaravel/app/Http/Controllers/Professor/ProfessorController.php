<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

// php artisan make:controller Professor/ProfessorController

class ProfessorController extends Controller
{
    public function Index()
    {
        return view('formularios.cadastroProfessor');
    }

    public function store(Request $request)
    {
        // Validação básica (protege de dados inválidos ou campos vazios)
        $request->validate([
            'nome' => 'required|string|max:128',
            'email' => 'required|string|max:128',
            'telefone' => 'required|string|max:20',
            'senha' => 'required|string|max:128',
            'confirmaSenha' => 'required|string|max:128',
            'nivelAcesso' => 'required',
            //nivel de Acesso é um select, não é necessário validar mais que required
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

            return redirect('api/professor')->with('success', 'Professor cadastrado com sucesso!');
        
        } else{
            return redirect()->back()->with('error','As senhas são diferentes');
            
        }
    }

    public function listagem(){
        $professores = Professor::all();
        return view('tabelas.professor', compact('professores'));
    }

    public function show($id)
    {
        return Professor::find($id);
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
