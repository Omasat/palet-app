<?php

declare(strict_types=1);

use Palet\Framework\Http\Message\Request;
use Palet\Framework\Http\Kernel\HttpKernel;
use Palet\Framework\Foundation\Application;

require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(\Palet\Framework\Contracts\Http\KernelInterface::class);

$request = Request::create('GET', '/');
$response = $kernel->handle($request);

if ($response->getStatusCode() !== 200) {
    echo "Basic route test failed: expected 200, got " . $response->getStatusCode();
    exit(1);
}

echo "Basic route test passed.";
