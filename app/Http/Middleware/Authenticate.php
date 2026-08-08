<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Palet\Framework\Http\Message\Request;
use Palet\Framework\Contracts\Http\Message\ResponseInterface;
use Closure;

class Authenticate
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): ResponseInterface
    {
        // if (! Auth::check()) {
        //     return redirect('login');
        // }

        return $next($request);
    }
}
