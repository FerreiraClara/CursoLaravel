<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Turma;

class AlunosController extends Controller
{

    public function index()
    {
        $turmas = Turma::all();
        return view('formularios.cadastroAluno', compact('turmas'));
    }

    public function store(Request $request)
    {
        $alunos = Aluno::all();

        $request->validate([
            'nome' => 'required|string|max:128',
            'pai' => 'required|string|max:128',
            'mae' => 'required|string|max:128',
            'documento' => 'required|string',
            'certidao' => 'required|file|image',
            'turma' => 'required',
            // 'criado_por' => 'required',

        ]);

        $newAluno = new Aluno();
        $newAluno->nome = $request->input('nome');
        $newAluno->nome_pai = $request->input('pai');
        $newAluno->nome_mae = $request->input('mae');
        $newAluno->documento = $request->input('documento');
        $newAluno->id_turma = $request->input('turma');
        // $newAluno->criado_por = auth()->user()->id;
        $newAluno->criado_por = '1';
        
        foreach ($alunos as $aluno) {
            if($aluno['documento'] == $request->input('documento')){
                return redirect()->back()->with('error', 'Aluno já cadastrado');
            }
        }
        
        if ($request->hasFile('certidao') && $request->file('certidao')->isValid()){
            $arquivo = $request->file('certidao');
            $nome_arquivo = time() . '_' . $arquivo->getClientOriginalName();
            $caminho = $arquivo->storeAs('certidoes', $nome_arquivo, 'public');

            $newAluno->certidao = $caminho;
        } else {
            $newAluno->certidao = null;
        }

        $newAluno->save();
        
        return redirect('api/aluno/lista')->with('success', 'Aluno cadastrado com sucesso!');

    }


    
    public function listagem()
    {
        $alunos = Aluno::with('turma', 'professor')->get();
        
        return view('tabelas.aluno', compact('alunos'));
    }
    
    public function presenca()
    {

        $alunos = Aluno::all();

        return view('tabelas.presenca', compact('alunos'));
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
