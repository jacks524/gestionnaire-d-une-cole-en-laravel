<?php

namespace App\Models;

use App\Enums\UserRole;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'matricule',
        'name',
        'email',
        'password',
        'role',
    ];
    //public $timestamps = false;

    protected $casts = [
        'role' => UserRole::class,
        'password' => 'hashed',
    ];
}