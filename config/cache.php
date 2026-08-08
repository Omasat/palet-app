<?php

return [
    'default' => 'file',
    'stores' => [
        'file' => [
            'driver' => 'file',
            'path' => dirname(__DIR__) . '/storage/framework/cache/data',
        ],
        'redis' => [
            'driver' => 'redis',
            'connection' => 'cache',
        ],
    ],
    'prefix' => 'palet_cache',
];
