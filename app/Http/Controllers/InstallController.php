<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Palet\Framework\Http\Message\Request;
use PDO;
use PDOException;

class InstallController extends Controller
{
    protected string $lockFile = __DIR__ . '/../../../../install.lock';
    protected string $envFile = __DIR__ . '/../../../../.env';

    public function index()
    {
        if (file_exists($this->lockFile)) {
            return new \Palet\Framework\Http\Message\Response(302, ['Location' => '/']);
        }

        return $this->renderView('install_index');
    }

    public function process(Request $request)
    {
        if (file_exists($this->lockFile)) {
            return new \Palet\Framework\Http\Message\Response(302, ['Location' => '/']);
        }

        // Extremely simplified web installer processing logic
        $body = $request->getParsedBody() ?? [];
        $dbHost = $body['db_host'] ?? '127.0.0.1';
        $dbPort = $body['db_port'] ?? '3306';
        $dbName = $body['db_name'] ?? 'palet';
        $dbUser = $body['db_user'] ?? 'root';
        $dbPass = $body['db_pass'] ?? '';

        // 1. Test Connection
        try {
            $dsn = "mysql:host=$dbHost;port=$dbPort;dbname=$dbName;charset=utf8mb4";
            $pdo = new PDO($dsn, $dbUser, $dbPass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (PDOException $e) {
            return $this->renderView('install_index', ['error' => 'Database connection failed: ' . $e->getMessage()]);
        }

        // 2. Write to .env
        $envContent = "APP_ENV=production\nAPP_DEBUG=false\nAPP_KEY=base64:" . base64_encode(random_bytes(32)) . "\n";
        $envContent .= "DB_CONNECTION=mysql\nDB_HOST=$dbHost\nDB_PORT=$dbPort\nDB_DATABASE=$dbName\nDB_USERNAME=$dbUser\nDB_PASSWORD=$dbPass\n";
        
        if (file_put_contents($this->envFile, $envContent) === false) {
             return $this->renderView('install_index', ['error' => 'Failed to write .env file. Check permissions.']);
        }

        // 3. Create lock file
        file_put_contents($this->lockFile, date('Y-m-d H:i:s'));

        return $this->renderView('install_success');
    }

    protected function renderView(string $viewName, array $data = [])
    {
        $path = realpath(__DIR__ . '/../../../resources/views/install/' . $viewName . '.php');
        if (!$path || !file_exists($path)) {
            return "View $viewName not found.";
        }

        extract($data);
        ob_start();
        include $path;
        return ob_get_clean();
    }
}
