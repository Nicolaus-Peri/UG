<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    
    protected $fillable = ['nama','alamat','no_telp','email','password','join_date','isActive','exit_date'];

    protected $hidden = ['password','remember_token',];

    protected $casts = ['email_verified_at' => 'datetime',];
}
