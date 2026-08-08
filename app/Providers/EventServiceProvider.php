<?php

declare(strict_types=1);

namespace App\Providers;

use Palet\Framework\Foundation\Providers\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected array $listen = [
        // 'App\Events\UserRegistered' => [
        //     'App\Listeners\SendWelcomeEmail',
        // ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }
}
