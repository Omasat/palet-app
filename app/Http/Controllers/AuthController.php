<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Palet\Framework\Http\Message\Request;

class AuthController extends Controller
{
    /**
     * Show the login form.
     */
    public function login()
    {
        return view('auth.login')->render();
    }

    /**
     * Handle the login request.
     */
    public function authenticate(Request $request)
    {
        // CSRF verification should normally be here

        $body = $request->getParsedBody() ?? [];
        $credentials = [
            'email' => $body['email'] ?? '',
            'password' => $body['password'] ?? '',
        ];

        $provider = auth()->guard()->getProvider();
        
        // Attempt to login
        if (auth()->attempt($credentials)) {
            // Usually, redirect to intended page
            // Since we don't have a robust redirector yet, we just return a message or redirect via header
            header('Location: /dashboard');
            exit;
        }

        // Failed login
        echo "Login failed. <a href='/login'>Try again</a>";
        exit;
    }

    /**
     * Show the dashboard (protected area).
     */
    public function dashboard()
    {
        // Require auth
        if (!auth()->check()) {
            header('Location: /login');
            exit;
        }

        return view('dashboard', [
            'user' => auth()->user()
        ]);
    }

    /**
     * Log the user out.
     */
    public function logout()
    {
        auth()->logout();
        header('Location: /');
        exit;
    }
}
