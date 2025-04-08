<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// php artisan make:controller Professor/ProfessorController

class ProfessorController extends Controller
{
    public function getIndex()
    {
        return "Index de Professor";
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
