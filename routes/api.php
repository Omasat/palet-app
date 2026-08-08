<?php

declare(strict_types=1);

use App\Http\Controllers\HomeController;

/** @var \Palet\Framework\Routing\Router $router */

$router->get('/user', function () {
    return [
        'id' => 1,
        'name' => 'John Doe'
    ];
});
