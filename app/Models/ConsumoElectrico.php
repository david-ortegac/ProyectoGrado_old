<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsumoElectrico extends Model
{
    use HasFactory;

    //relacion 1 a muchos inversa
    public function dispositivo(){
        return $this->belongsTo(Dispositivo::class);
    }
}
