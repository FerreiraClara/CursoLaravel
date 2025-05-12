<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\Professor\ProfessorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AutenticacaoController;
use App\Http\Controllers\RelatoriosController;
use App\Http\Controllers\PresencaController;

// ----------------------------------- ROTAS DO PROJETO ---------------------------

Route::get('/', [AutenticacaoController::class, 'login'])->name('login');
Route::post('/', [AutenticacaoController::class, 'logar'])->name('autenticacao.logar');
Route::get('/logout', [AutenticacaoController::class, 'logout'])->middleware('auth');

Route::resource('/resource', AutenticacaoController::class);


Route::get('home', function(){
    return view('home');
})->name('home');




// ----------------------------------- ROTAS DE APRENDIZAGEM ---------------------------

// Route::get('/welcome', function (){
//     return view('welcome');
// });

// Route::get('/contato', function() {
//     return "Página de Contato!";
// });

// Route::post('/contato', function() {
//     return "Página Post!";
// });

// Route::put('/contato', function() {
//     return "Página Put!";
// });

// Route::delete('/contato', function() {
//     return "Página Delete!";
// });

// Route::match(['get', 'post'], 'sobre', function() {
//     return "Trabalhando com match";
// });

// Route::any('todos', function() {
//     $url = url('nova');
//     return "Trabalhando com any " . $url;
// });

// Route::get('/produto/{id?}/{cor?}', function($id=null, $cor='Não definido') {
//     $url = url('/produto/{id?}/cor={cor?}');
//     return (
//         "Produto $id <br>
//         cor = $cor <br><br>"
//         . $url );
// });

// // rotas apelidadas
// Route::get('teste', ['as' => 'detalhes', function() {
//     return 'Pagina Teste';
// }]);

// Route::get('link', ['as' => 'link', function() {
//     return 'Link <a href="'. route('detalhes') .'">Detalhe</a>';
// }]);


// // grupo de rotas
// Route::group(['prefix' => 'admin'], function() {
//     Route::get('/contato', function() {
//         return "Página de Admin Contato!";
//     });

//     Route::get('/sobre', function() {
//         return "Página de Admin Sobre!";
//     });

//     Route::get('/configuracoes', function() {
//         return "Página de Admin Configurações!";
//     });
// });


// // name é o apelido
// Route::get('turma/lista', [TurmaController::class, 'index'])->name('livro.index');



