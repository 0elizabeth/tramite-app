<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    use HasFactory;
    public function users(){
        return $this->hasMany(User::class);
    }
    public function movimientos(){
        return $this->hasMany(Movimientos::class);
    }
}
