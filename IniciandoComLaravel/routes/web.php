<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\Professor\ProfessorController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/contato', function() {
    return "Página de Contato!";
});

Route::post('/contato', function() {
    return "Página Post!";
});

Route::put('/contato', function() {
    return "Página Put!";
});

Route::delete('/contato', function() {
    return "Página Delete!";
});

Route::match(['get', 'post'], 'sobre', function() {
    return "Trabalhando com match";
});

Route::any('todos', function() {
    $url = url('nova');
    return "Trabalhando com any " . $url;
});

Route::get('/produto/{id?}/{cor?}', function($id=null, $cor='Não definido') {
    $url = url('/produto/{id?}/cor={cor?}');
    return (
        "Produto $id <br>
        cor = $cor <br><br>"
        . $url );
});

// rotas apelidadas
Route::get('teste', ['as' => 'detalhes', function() {
    return 'Pagina Teste';
}]);

Route::get('link', ['as' => 'link', function() {
    return 'Link <a href="'. route('detalhes') .'">Detalhe</a>';
}]);


// grupo de rotas
Route::group(['prefix' => 'admin'], function() {
    Route::get('/contato', function() {
        return "Página de Admin Contato!";
    });

    Route::get('/sobre', function() {
        return "Página de Admin Sobre!";
    });

    Route::get('/configuracoes', function() {
        return "Página de Admin Configurações!";
    });
});


// name é o apelido
Route::get('turma/lista', [TurmaController::class, 'index'])->name('livro.index');

Route::controller(ProfessorController::class)->group(function () {
    // Route::get('professor', 'getIndex'); // a classe foi alterada para 'index'
    Route::get('professor', 'getLista');
    Route::post('professor', 'postLista');
});





// ----------------------------------- ROTAS DO PROJETO ---------------------------

Route::get('/', [ProfessorController::class, 'formLogar']);
Route::post('/', [ProfessorController::class, 'logar']);

Route::get('home', function(){
    return view('paginasIniciais.home');
})->name('home');

Route::group(['prefix' => 'cadastro'], function() {
    Route::get('aluno', [AlunosController::class, 'create'])->name('cadastro.aluno');
    Route::post('aluno', [AlunosController::class, 'store'])->name('store.aluno');
    Route::get('professor', [ProfessorController::class, 'create'])->name('cadastro.professor');
    Route::post('professor', [ProfessorController::class, 'store'])->name('store.professor');
    Route::get('turma', [TurmaController::class, 'create'])->name('cadastro.turma');
    Route::post('turma', [TurmaController::class, 'store'])->name('store.turma');
});

Route::group(['prefix' => 'show'], function() {
    Route::get('professor', [ProfessorController::class, 'showAll'])->name('tabela.professor');
    Route::get('aluno', [AlunosController::class, 'showAll'])->name('tabela.aluno');
    Route::get('turma', [TurmaController::class, 'showAll'])->name('tabela.turma');
});

Route::get('aluno', [AlunosController::class, 'index'])->name('inicial.aluno');
Route::get('turma', [TurmaController::class, 'index'])->name('inicial.turma');
Route::get('professor', [ProfessorController::class, 'index'])->name('inicial.professor');