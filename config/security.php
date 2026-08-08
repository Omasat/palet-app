<?php

return [
    'session_cookie' => [
        'secure' => env('SESSION_SECURE_COOKIE', false),
        'http_only' => true,
        'same_site' => 'lax',
    ],

    'headers' => [
        'x_frame_options' => 'SAMEORIGIN',
        'x_content_type_options' => 'nosniff',
        'referrer_policy' => 'no-referrer-when-downgrade',
        'strict_transport_security' => 'max-age=31536000; includeSubDomains; preload',
    ],

    'trusted_proxies' => env('TRUSTED_PROXIES', ''),
    'trusted_hosts' => [
        env('APP_URL'),
    ],
];
