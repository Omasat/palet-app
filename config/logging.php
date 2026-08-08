<?php

return [
    'default' => 'stack',
    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['single'],
            'ignore_exceptions' => false,
        ],
        'single' => [
            'driver' => 'single',
            'path' => dirname(__DIR__) . '/storage/logs/palet.log',
            'level' => 'debug',
        ],
    ],
];
