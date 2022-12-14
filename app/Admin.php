<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable

{
    use Notifiable;

    protected $fillable = [
        'name', 'username', 'email', 'password','foto',
    ];

    protected $hidden = [
      'password','remember_token',
    ];

    public function setPasswordAttribute($val)
	{
     return $this->attributes['password'] = bcrypt($val);
	}
}