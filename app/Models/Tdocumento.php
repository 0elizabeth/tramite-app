<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tdocumento extends Model
{
    use HasFactory;
    public function documentos(){
        return $this->hasMany(Documentos::class);
    }
}