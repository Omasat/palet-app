<?php

declare(strict_types=1);

$config = require __DIR__ . '/../config/app.php';

if (!isset($config['name']) || $config['name'] !== 'Palet Framework') {
    echo "Config load test failed.";
    exit(1);
}

echo "Config load test passed.";
