<?php

declare(strict_types=1);

namespace App\Providers;

use Palet\Framework\Foundation\Providers\ServiceProvider;
use Palet\Framework\Contracts\Routing\RouterInterface;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadRoutes();
    }

    /**
     * Load the application routes.
     */
    protected function loadRoutes(): void
    {
        $router = $this->app->make(RouterInterface::class);

        // Load web routes
        $router->group([
            'middleware' => 'web',
        ], function ($router) {
            require $this->app->basePath('routes/web.php');
        });

        $router->group([
            'prefix' => 'api',
            'middleware' => 'api',
        ], function ($router) {
            require $this->app->basePath('routes/api.php');
        });
    }
}
