<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TurmaController extends Controller
{
    public function index()
    {
        $turma = ["nome"=>'ensino médio', 'turno'=>'manha'];

        return view('cadastro.cadastroTurma', $turma);
    }
}
