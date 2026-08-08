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
        return view('welcome', ['name' => 'Kullanıcı'])->render();
    }

    /**
     * Greet the user.
     */
    public function greet(Request $request, string $name)
    {
        return "Hello, {$name}! Welcome to Palet Enterprise Framework.";
    }
}
