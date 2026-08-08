<?php

return [
    'name' => 'Palet Framework',
    'env' => 'production',
    'debug' => false,
    'url' => 'http://localhost',

    'timezone' => 'UTC',
    'locale' => 'en',

    'providers' => [
        \App\Providers\AppServiceProvider::class,
        \App\Providers\RouteServiceProvider::class,
        \Palet\Framework\Database\DatabaseServiceProvider::class,
    ],
];
