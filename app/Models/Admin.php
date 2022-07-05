<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Auth\User as Authenticatable;

class Admin extends Model
{
    use Notifiable;

        protected $guard = 'admin';

        protected $fillable = [
            'name', 'email', 'password', 'alamat', 'no_telp'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}
