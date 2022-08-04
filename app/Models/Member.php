<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use Notifiable;
    protected $guard = ['member','admin'];
    protected $fillable = [
        'name', 'email', 'password','role'
    ];
    protected $hidden = [
      'password', 'remember_token',
    ];
}
