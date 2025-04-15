<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\Professor\ProfessorController;

Route::get('/', function () {
    return view('welcome');
});

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


Route::group(['prefix' => 'cadastro'], function() {
    Route::get('aluno', [AlunosController::class, 'index']);
    Route::get('professor', [ProfessorController::class, 'index']);
    Route::get('turma', [TurmaController::class, 'index']);
});

Route::group(['prefix' => 'show'], function() {
    Route::get('professor', [ProfessorController::class, 'showAll']);
    Route::get('aluno', [AlunosController::class, 'showAll']);
    Route::get('turma', [TurmaController::class, 'showAll']);
});

Route::get('verindex', function() {
    return view('layout.index');
});