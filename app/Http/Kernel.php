<?php

declare(strict_types=1);

namespace App\Http;

use Palet\Framework\Http\Kernel\HttpKernel as BaseKernel;

class Kernel extends BaseKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array<int, class-string>
     */
    protected array $middleware = [
        \App\Http\Middleware\TrustProxies::class,
        \App\Http\Middleware\HandleCors::class,
        \App\Http\Middleware\StartSession::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array<string, array<int, class-string>>
     */
    protected array $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\VerifyCsrfToken::class,
        ],
        'api' => [
            \App\Http\Middleware\ThrottleRequests::class,
        ],
    ];
}
