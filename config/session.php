<?php

return [
    'driver' => 'file',
    'lifetime' => 120,
    'expire_on_close' => false,
    'files' => dirname(__DIR__) . '/storage/framework/sessions',
    'connection' => null,
    'table' => 'sessions',
    'store' => null,
    'lottery' => [2, 100],
    'cookie' => 'palet_session',
    'path' => '/',
    'domain' => null,
    'secure' => null,
    'http_only' => true,
    'same_site' => 'lax',
];
