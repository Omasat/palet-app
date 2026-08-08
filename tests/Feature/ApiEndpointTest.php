<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class ApiEndpointTest extends TestCase
{
    public function test_health_check_endpoint_returns_success()
    {
        $response = $this->get('/api/health');

        $this->assertEquals(200, $response->getStatusCode());
        
        $body = $response->getBody()->getContents();
        $data = json_decode($body, true);
        
        $this->assertIsArray($data);
        $this->assertEquals('success', $data['status']);
        $this->assertArrayHasKey('version', $data);
    }
}
