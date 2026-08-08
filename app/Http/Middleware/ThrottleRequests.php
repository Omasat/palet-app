<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Palet\Framework\Contracts\Http\Message\RequestInterface;
use Palet\Framework\Contracts\Http\Message\ResponseInterface;
use Palet\Framework\Contracts\Http\Middleware\MiddlewareInterface;
use Closure;

class ThrottleRequests implements MiddlewareInterface
{
    protected int $maxAttempts = 60;
    protected int $decaySeconds = 60;

    public function handle(RequestInterface $request, Closure $next): ResponseInterface
    {
        $key = $request->getServerParams()['REMOTE_ADDR'] ?? '127.0.0.1';
        $cacheKey = 'throttle:' . sha1($key);

        $attempts = (int) ($_SESSION[$cacheKey]['count'] ?? 0);
        $expires = (int) ($_SESSION[$cacheKey]['expires'] ?? 0);

        if ($expires < time()) {
            $attempts = 0;
            $expires = time() + $this->decaySeconds;
        }

        if ($attempts >= $this->maxAttempts) {
            return new \Palet\Framework\Http\Message\Response(429, [], 'Too Many Requests');
        }

        $_SESSION[$cacheKey] = [
            'count' => $attempts + 1,
            'expires' => $expires,
        ];

        return $next($request);
    }
}
