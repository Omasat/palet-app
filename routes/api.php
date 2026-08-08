<?php

declare(strict_types=1);

/** @var \Palet\Framework\Routing\Router $router */

$router->get('/health', function () {
    return [
        'status' => 'success',
        'message' => 'Palet API is running perfectly!',
        'timestamp' => time(),
        'version' => '1.0.0-RC1'
    ];
});

$router->get('/user', function (\Palet\Framework\Contracts\Http\Message\RequestInterface $request) {
    // In a real application, you would return the authenticated user here.
    return [
        'status' => 'success',
        'data' => [
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'role' => 'admin'
        ]
    ];
});

$router->post('/echo', function (\Palet\Framework\Contracts\Http\Message\RequestInterface $request) {
    // A simple endpoint to test POST requests and JSON parsing
    return [
        'status' => 'success',
        'received_data' => $request->getParsedBody() ?? []
    ];
});
