<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Palet\Framework\Contracts\Http\Message\RequestInterface;
use Palet\Framework\Contracts\Http\Message\ResponseInterface;
use Palet\Framework\Contracts\Http\Middleware\MiddlewareInterface;
use Closure;

class StartSession implements MiddlewareInterface
{
    public function handle(RequestInterface $request, Closure $next): ResponseInterface
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $response = $next($request);

        if (session_status() === PHP_SESSION_ACTIVE) {
            session_write_close();
        }

        return $response;
    }
}
