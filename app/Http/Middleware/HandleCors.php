<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Palet\Framework\Contracts\Http\Message\RequestInterface;
use Palet\Framework\Contracts\Http\Message\ResponseInterface;
use Palet\Framework\Contracts\Http\Middleware\MiddlewareInterface;
use Closure;

class HandleCors implements MiddlewareInterface
{
    public function handle(RequestInterface $request, Closure $next): ResponseInterface
    {
        $response = $next($request);

        return $response->withHeader('Access-Control-Allow-Origin', '*')
                        ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE, OPTIONS')
                        ->withHeader('Access-Control-Allow-Headers', 'Content-Type, Authorization, X-Requested-With, X-CSRF-TOKEN');
    }
}
