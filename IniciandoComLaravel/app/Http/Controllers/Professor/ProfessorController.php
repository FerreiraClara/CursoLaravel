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

    public function getLista()
    {
        return "Lista de Professor";
    }

    public function postLista()
    {
        return "POST: Lista de Professor";
    }
}
