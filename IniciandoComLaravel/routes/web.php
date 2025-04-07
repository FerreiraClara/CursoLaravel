<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function() {
    return "Página de Contato!";
});

Route::post('/contatop', function() {
    return "Página Post";
});


// Route::post('contatop', [SessionController::class, 'store']) -> name('contato.store');