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

        $listTest = Professor::all();

        $arrayVazio = [];

        return view('tabelas.professor', compact('listTest', 'arrayVazio'));
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
