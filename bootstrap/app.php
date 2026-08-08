<?php

declare(strict_types=1);

use Palet\Framework\Foundation\Application;

// Load simple helpers before application bootstrap so config files can use `env()` safely.
require_once __DIR__ . '/helpers.php';

$app = new Application(
    dirname(__DIR__)
);

$app->singleton(
    \Palet\Framework\Contracts\Http\KernelInterface::class,
    \App\Http\Kernel::class
);

$app->singleton(
    \Palet\Framework\Contracts\Console\KernelInterface::class,
    \App\Console\Kernel::class
);

return $app;
