<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'no_telp', 'jenis_kelamin', 'email' , 'detail', 'image'
    ];
}
