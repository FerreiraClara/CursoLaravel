<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Professor;

class TurmaController extends Controller
{
    public function index()
    {
        $professores = Professor::all();

        return view('cadastro.cadastroTurma', compact('professores'));
    }

    public function showAll()
    {
        $turmas = Turma::with('professor')->get();

        return view('tabelas.turma', compact('turmas'));
    }
}
