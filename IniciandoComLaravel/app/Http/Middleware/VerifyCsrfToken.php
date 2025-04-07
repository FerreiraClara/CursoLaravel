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
    
    protected $except = [
        '/contatop'
    ];

    public function handle($request, \Closure $next)
    {
        //verificando se o middleware está sendo utilizado
        //para isso, tentar acessar qualquer página no laravel
        // dd("Middleware verify personalizado");
        \Log::info('>> Passei pelo VerifyCsrfToken personalizado');
        return parent::handle($request, $next);
     }
}
