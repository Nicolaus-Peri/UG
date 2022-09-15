<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;
    protected $fillable = ['category', 'type', 'jenis', 'int_value', 'description', 'image'];

    public function jadwal(){
        return $this->belongsTo(Jadwal::class);
    }
}
