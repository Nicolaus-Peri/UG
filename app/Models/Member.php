<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $primaryKey = 'id_member';
    protected $fillable = ['nama','alamat','no_telp','email','password','join_date','isActive','exit_date'];
}
