<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;

class TurmaController extends Controller
{
    public function index()
    {
        return view('cadastro.cadastroTurma');
    }

    public function showAll()
    {
        $turmas = Turma::with('professor')->get();

        return view('tabelas.turma', compact('turmas'));
    }
}
