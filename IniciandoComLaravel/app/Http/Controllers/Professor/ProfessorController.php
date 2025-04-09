<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// php artisan make:controller Professor/ProfessorController

class ProfessorController extends Controller
{
    public function Index()
    {
        return view('cadastro.cadastroProfessor');
    }

    public function showAll()
    {
        $professores = array(
            ['nome' => 'Gustavo'],
            ['nome' => 'Maria'],
            ['nome' => 'Paula'],
            ['nome' => 'Breno'],
            ['nome' => 'Miguel'],
        );

        $arrayVazio = [];

        return view('cadastro.cadastroProfessor', compact('professores', 'arrayVazio'));
    }

    public function show(string $id)
    {
        //
    }

    public function postLista()
    {
        return "POST: Lista de Professor";
    }
}
