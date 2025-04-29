<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Presenca;

class PresencaController extends Controller
{
    public function index(){

        $alunos = Aluno::all();

        return view('formularios.chamadas', compact('alunos'));
    }

    public function store(Request $request)
    {
        $alunos = Aluno::all();

        // $request->validate([
        //     'data' => 'required',
        //     'aluno' => 'required|string|max:128',
        //     'presenca' => 'required',

        // ]);

        foreach($alunos as $aluno){

            $input_aluno = $aluno->id . 'id';
            $input_presenca = $aluno->id . 'presenca';

            $presenca = new Presenca();
            $presenca->data = $request->input('data');
            $presenca->aluno = $request->input($input_aluno);
            $presenca->presenca = $request->input($input_presenca);


            $presenca->save();
        }


        return redirect()->back()->with('success', 'Presença cadastrada com sucesso');
    }

}
