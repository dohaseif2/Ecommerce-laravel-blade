<?php

use App\Http\Middleware\AdminRoleCheck;
use App\Http\Middleware\RoleCheck;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'adminRoleCheck' => AdminRoleCheck::class,
            'roleCheck' => RoleCheck::class
        ]);
       
        
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
