<?php

declare(strict_types=1);

use App\Http\Controllers\HomeController;

// Router is injected by RouteServiceProvider

// Example of calling a Controller Action
$router->get('/', [HomeController::class, 'index']);

// Installer Routes
$router->get('/install', [\App\Http\Controllers\InstallController::class, 'index']);
$router->post('/install', [\App\Http\Controllers\InstallController::class, 'process']);

// Example of a parameterized route calling a Controller Action
$router->get('/hello/{name}', [HomeController::class, 'greet']);
