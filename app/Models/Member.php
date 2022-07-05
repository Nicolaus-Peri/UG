<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use Notifiable;

        protected $guard = 'writer';

        protected $fillable = [
            'nama', 'email', 'password', 'alamat', 'no_telp','join_date','isActive','exit_date'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}
