<?php

declare(strict_types=1);

namespace App\Models;

use Palet\Framework\Contracts\Auth\AuthenticatableInterface;
use Palet\Framework\Database\Orm\Model\BaseModel;

class User extends BaseModel implements AuthenticatableInterface
{
    public function getAuthIdentifier(): mixed
    {
        return $this->id;
    }

    public function getAuthPassword(): string
    {
        return $this->password;
    }
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
