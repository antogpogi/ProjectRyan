<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
	use Notifiable;
    //

    protected $guard = 'admin';

    protected $fillable = [
   	'email', 'password', 'position',
   	];

    protected $hidden = [
    'password', 'remember_token',
    ];
}
