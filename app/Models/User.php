<?php

declare(strict_types=1);

namespace App\Models;

// use Palet\Framework\Auth\Authenticatable;
// use Palet\Framework\Database\Eloquent\Model;

class User // extends Model implements Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected array $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected array $hidden = [
        'password',
        'remember_token',
    ];
}
