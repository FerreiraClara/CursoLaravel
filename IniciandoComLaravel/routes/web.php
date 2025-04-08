<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

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

Route::get('/artigo/{id}', function($id) {
    return "Página de Artigo $id!";
});


// Route::post('contatop', [SessionController::class, 'store']) -> name('contato.store');