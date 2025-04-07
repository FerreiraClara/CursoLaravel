<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * As rotas que devem ser ignoradas pela proteção csrf
     *
     * @var \array\
     */
    
    // A alteração aqui, não estava funcionando, então foi feita a alteração no vendor (não recomendado)
    protected $except = [
        '/contato'
    ];
}
