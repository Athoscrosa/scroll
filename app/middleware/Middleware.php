<?php

declare(strict_types=1);

namespace app\middleware;

class Middleware
{
    # Metodos de autenticação via token de rota POST
    public static function api(){
        $middware = function ($request, $hadler) {};
        return $middware;
    
    }
    # Metodos de  autenticação das rotas GET.
    Public static function web()
    {
        $middleware = function ($request, $handler) {};
        return $middleware;
    
    }

}