<?php

use App\Http\Middleware\AgeCheck;
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
        //this is optional,this is for using shortcut name for Middleware
        $middleware->alias([
            'check.age'=>AgeCheck::class,
        ]);
        // Additional middleware configuration can go here
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
