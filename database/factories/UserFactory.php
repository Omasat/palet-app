<?php

declare(strict_types=1);

namespace Database\Factories;

// use Palet\Framework\Database\Eloquent\Factories\Factory;

class UserFactory // extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => 'randomString10',
        ];
    }
}
