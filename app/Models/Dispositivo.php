<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    use HasFactory;

    //relacion 1 a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tipo_dispositivo(){
        return $this->belongsTo(TipoDispositivo::class);
    }

    //relacion 1 a muchos
    public function consumo_electrico(){
        return $this->hasMany(ConsumoElectrico::class);
    }
}
