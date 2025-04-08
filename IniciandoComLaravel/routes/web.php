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

Route::get('/produto/{id?}/{cor?}', function($id=null, $cor='Não definido') {
    $url = url('/produto/{id?}/cor={cor?}');
    return (
        "Produto $id <br>
        cor = $cor <br><br>"
        . $url );
});

Route::get('teste', ['as' => 'detalhes', function() {
    return 'Pagina Teste';
}]);

Route::get('link', ['as' => 'link', function() {
    return 'Link <a href="'. route('detalhes') .'">Detalhe</a>';
}]);


// Route::post('contatop', [SessionController::class, 'store']) -> name('contato.store');