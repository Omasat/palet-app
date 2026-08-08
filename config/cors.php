<?php

return [
    'paths' => ['api/*'],
    'allowed_methods' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'],
    'allowed_origins' => [env('CORS_ALLOWED_ORIGINS', 'http://localhost')],
    'allowed_headers' => ['Content-Type', 'Authorization', 'X-Requested-With', 'X-CSRF-TOKEN'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];
