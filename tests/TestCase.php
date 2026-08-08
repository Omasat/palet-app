<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
use Palet\Framework\Foundation\Application;
use Palet\Framework\Contracts\Http\KernelInterface;
use Palet\Framework\Http\Message\Request;

abstract class TestCase extends BaseTestCase
{
    protected ?Application $app = null;

    protected function setUp(): void
    {
        parent::setUp();
        $this->app = $this->createApplication();
    }

    protected function createApplication(): Application
    {
        $app = require __DIR__ . '/../bootstrap/app.php';
        
        // Resolve kernel and bootstrap application
        $kernel = $app->make(KernelInterface::class);
        $kernel->bootstrap();
        
        return $app;
    }

    protected function get(string $uri): \Palet\Framework\Contracts\Http\Message\ResponseInterface
    {
        $kernel = $this->app->make(KernelInterface::class);
        
        // Create a mock Request
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_SERVER['REQUEST_URI'] = $uri;
        
        $request = Request::createFromGlobals();
        
        return $kernel->handle($request);
    }
}
