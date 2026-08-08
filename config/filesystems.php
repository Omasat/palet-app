<?php

return [
    'default' => 'local',

    'disks' => [
        'local' => [
            'driver' => 'local',
            'root' => dirname(__DIR__) . '/storage/app',
        ],

        'public' => [
            'driver' => 'local',
            'root' => dirname(__DIR__) . '/storage/app/public',
            'url' => env('APP_URL') . '/storage',
            'visibility' => 'public',
        ],
    ],
];
