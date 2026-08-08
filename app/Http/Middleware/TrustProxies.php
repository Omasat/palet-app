<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Palet\Framework\Http\Message\Request;
use Palet\Framework\Contracts\Http\Message\ResponseInterface;
use Closure;

class TrustProxies
{
    /**
     * The trusted proxies for this application.
     *
     * @var array|string|null
     */
    protected $proxies;

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): ResponseInterface
    {
        return $next($request);
    }
}
