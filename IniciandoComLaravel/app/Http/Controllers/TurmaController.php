<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Professor;

class TurmaController extends Controller
{
    public function index()
    {
        return view('paginasIniciais.turma');
    }

    public function create()
    {
        $professores = Professor::all();

        return view('cadastro.cadastroTurma', compact('professores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:128',
            'diaSemana' => 'required|string|max:128',
            'professorResponsavel' => 'required|string|max:128',

        ]);


        $turma = new Turma();
        $turma->nome = $request->input('nome');
        $turma->diaDaSemana = $request->input('diaSemana');
        $turma->prof_responsavel = $request->input('professorResponsavel');

        // dd($request->all());

        $turma->save();


        return redirect()->back()->with('success', 'Turma cadastrada com sucesso!');
    }

    public function showAll()
    {
        $turmas = Turma::with('professor')->get();

        return view('tabelas.turma', compact('turmas'));
    }
}
