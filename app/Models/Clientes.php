<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    public function documento(){
        return $this->hasMany(Documentos::class);
    }
    public function movimiento(){
        return $this->hasMany(Movimientos::class);
    }
}
