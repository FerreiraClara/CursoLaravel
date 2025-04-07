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


// Route::post('contatop', [SessionController::class, 'store']) -> name('contato.store');