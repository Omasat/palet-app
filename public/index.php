<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(\Palet\Framework\Contracts\Http\KernelInterface::class);

$request = \Palet\Framework\Http\Message\Request::createFromGlobals();

$kernel->sendRequest($request);
