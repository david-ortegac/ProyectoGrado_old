<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDispositivo extends Model
{
    use HasFactory;

    //relacion 1 a muchos
    public function dispositivo(){
        return $this->hasMany(Dispositivo::class);
    }
}
