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

        return view('formularios.cadastroTurma', compact('professores'));
    }

    public function store(Request $request)
    {
        $turmas = Turma::all();

        $request->validate([
            'nome' => 'required|string|max:128',
            'diaSemana' => 'required',
            'professorResponsavel' => 'required',

        ]);


        $turma = new Turma();
        $turma->nome = $request->input('nome');
        $turma->diaDaSemana = $request->input('diaSemana');
        $turma->prof_responsavel = $request->input('professorResponsavel');

        // dd($request->all());

        foreach ($turmas as $turma) {
            if(($turma['nome'] == $request->input('nome')) && ($turma['diaDaSemana'] == $request->input('diaSemana'))){
                return redirect()->back()->with('error', 'Turma já cadastrada');
            }
        }

        $turma->save();


        return redirect()->back()->with('success', 'Turma cadastrada com sucesso!');
    }

    public function showAll()
    {
        $turmas = Turma::with('professor')->get();

        return view('tabelas.turma', compact('turmas'));
    }
}
