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
    protected ?\Psr\SimpleCache\CacheInterface $cache;

    public function __construct()
    {
        // Try to resolve CacheInterface from the container if available
        if (class_exists('\\Palet\\Framework\\Foundation\\Application')) {
            $app = \Palet\Framework\Foundation\Application::getInstance();
            if ($app !== null && $app->has(\Psr\SimpleCache\CacheInterface::class)) {
                $this->cache = $app->make(\Psr\SimpleCache\CacheInterface::class);
            }
        }
    }

    public function handle(RequestInterface $request, Closure $next): ResponseInterface
    {
        $key = $request->getServerParams()['REMOTE_ADDR'] ?? '127.0.0.1';
        $cacheKey = 'throttle:' . sha1($key);

        if (isset($this->cache)) {
            $attempts = (int) $this->cache->get($cacheKey, 0);
            
            if ($attempts >= $this->maxAttempts) {
                return new \Palet\Framework\Http\Message\Response(429, [], 'Too Many Requests');
            }
            
            $this->cache->set($cacheKey, $attempts + 1, $this->decaySeconds);
        } else {
            // Fallback to simple temporary runtime array if cache is completely unavailable
            static $runtimeCache = [];
            $attempts = $runtimeCache[$cacheKey] ?? 0;
            if ($attempts >= $this->maxAttempts) {
                return new \Palet\Framework\Http\Message\Response(429, [], 'Too Many Requests');
            }
            $runtimeCache[$cacheKey] = $attempts + 1;
        }

        return $next($request);
    }
}
