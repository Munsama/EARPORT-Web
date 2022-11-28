<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'username', 'email', 'password', 'role', 'no.hp', 'alamat', 'jenis_kelamin', 'image'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

