<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Palet\Framework\Http\Message\Request;

class HomeController extends Controller
{
    /**
     * Show the application welcome screen.
     */
    public function index()
    {
        $path = realpath(__DIR__ . '/../../../resources/views/welcome.php');

        if ($path && file_exists($path)) {
            return file_get_contents($path);
        }

        return '<h1>Palet Framework</h1><p>Welcome page not found.</p>';
    }

    /**
     * Greet the user.
     */
    public function greet(Request $request, string $name)
    {
        return "Hello, {$name}! Welcome to Palet Enterprise Framework.";
    }
}
