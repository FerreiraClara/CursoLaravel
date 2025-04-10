<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;

class TurmaController extends Controller
{
    public function index()
    {
        $turma = new Turma("9 ano");
        $t = $turma->getNome();

        return view('cadastro.cadastroTurma', compact('t'));
    }
}
