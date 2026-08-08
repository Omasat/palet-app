<?php

declare(strict_types=1);

namespace App\Providers;

use Palet\Framework\Foundation\Providers\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Bind custom services to the container here
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Run bootstrap logic here
    }
}
