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
        $user = $provider->retrieveByCredentials($credentials);
        
        echo "<h3>Debug Info:</h3>";
        echo "<strong>Credentials received:</strong> "; var_dump($credentials);
        echo "<br><strong>User found in DB:</strong> "; var_dump((bool)$user);
        if ($user) {
            echo "<br><strong>User Hash from DB:</strong> "; var_dump($user->getAuthPassword());
            echo "<br><strong>Password Verify:</strong> "; var_dump(password_verify($credentials['password'], $user->getAuthPassword()));
            echo "<br><strong>Validate Method:</strong> "; var_dump($provider->validateCredentials($user, $credentials));
        }
        exit;

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
        if (auth()->guest()) {
            header('Location: /login');
            exit;
        }

        $user = auth()->user();
        return "Welcome to the Dashboard, " . htmlspecialchars($user->name) . "! <br><a href='/logout'>Logout</a>";
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
