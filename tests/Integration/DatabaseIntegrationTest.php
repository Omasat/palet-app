<?php

namespace Tests\Integration;

use Tests\TestCase;
use Palet\Framework\Contracts\Database\DatabaseManagerInterface;

class DatabaseIntegrationTest extends TestCase
{
    public function test_database_connection_can_be_established()
    {
        // Resolve DatabaseManager from the Application Container
        $db = $this->app->make(DatabaseManagerInterface::class);
        
        $this->assertNotNull($db);
        
        // Execute a basic query to verify connection
        $connection = $db->connection();
        $pdo = $connection->getPdo();
        
        $this->assertInstanceOf(\PDO::class, $pdo);
        
        // For sqlite/mysql this should return 1
        $stmt = $pdo->query('SELECT 1 as val');
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        
        $this->assertEquals(1, (int) $result['val']);
    }
}
