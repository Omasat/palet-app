<?php

declare(strict_types=1);

namespace App\Console;

use Palet\Framework\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected array $commands = [
        \Palet\Framework\Console\Commands\Generator\MakeControllerCommand::class,
    ];

    public function __construct(\Palet\Framework\Console\Application $app)
    {
        parent::__construct($app);
        
        foreach ($this->commands as $commandClass) {
            $this->app->add(new $commandClass());
        }
    }

    /**
     * Define the application's command schedule.
     */
    protected function schedule(): void
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');
    }
}
