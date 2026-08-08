<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Palet\Framework\Contracts\Http\Message\RequestInterface;
use Palet\Framework\Contracts\Http\Message\ResponseInterface;
use Palet\Framework\Contracts\Http\Middleware\MiddlewareInterface;
use Closure;

class VerifyCsrfToken implements MiddlewareInterface
{
    public function handle(RequestInterface $request, Closure $next): ResponseInterface
    {
        if (in_array($request->getMethod(), ['GET', 'HEAD', 'OPTIONS'], true)) {
            return $next($request);
        }

        $token = $request->getHeaderLine('X-CSRF-TOKEN') ?: $request->getHeaderLine('X-XSRF-TOKEN');

        if (empty($token) || $token !== ($_COOKIE['XSRF-TOKEN'] ?? '')) {
            return new \Palet\Framework\Http\Message\Response(419, [], 'CSRF token mismatch.');
        }

        return $next($request);
    }
}
