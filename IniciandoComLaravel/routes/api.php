<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Professor\ProfessorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AutenticacaoController;
use App\Http\Controllers\RelatoriosController;
use App\Http\Controllers\PresencaController;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\TurmaController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/professor/lista', [ProfessorController::class, 'listagem'])->name('professor.lista');
Route::apiResource('/professor', ProfessorController::class);

Route::get('/aluno/lista', [AlunosController::class, 'listagem'])->name('aluno.lista');
Route::apiResource('/aluno', AlunosController::class);

Route::get('/turma/lista', [TurmaController::class, 'listagem'])->name('turma.lista');
Route::apiResource('/turma', TurmaController::class);