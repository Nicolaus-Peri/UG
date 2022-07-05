<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $fillable = ['day', 'trainer', 'str_value'];

    public function apps(){
        return $this->hasOne(App::class);
    }
    public function trainers(){
        return $this->hasOne(Trainer::class);
    }
}
