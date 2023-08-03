<?php

namespace Bibrokhim\LaravelForceJsonResponse;

use Bibrokhim\LaravelForceJsonResponse\Http\Middleware\ForceJsonResponse;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class ForceJsonResponseServiceProvider extends ServiceProvider
{
    public function boot(Kernel $kernel, Request $request): void
    {
        if ($request->header('Accept') !== 'application/json') {
            $request->headers->set('Accept', 'application/json');
        }

        $kernel->pushMiddleware(ForceJsonResponse::class);
    }
}