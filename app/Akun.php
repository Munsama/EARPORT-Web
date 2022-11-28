<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    //
    protected $table = 'users';
    protected $fillable = [
        'name', 'username', 'email', 'password', 'role', 'jenis_kelamin', 'no_hp', 'alamat','image'
    ];
    protected $hidden = [
        'password'
    ];
}
