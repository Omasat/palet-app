<?php

namespace Tests\Smoke;

use PHPUnit\Framework\TestCase;

class ApplicationBootTest extends TestCase
{
    public function test_application_can_boot()
    {
        $app = require __DIR__ . '/../../bootstrap/app.php';
        $this->assertNotNull($app);
    }
}
