<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    use HasFactory;

    //relacion 1 a muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tipo_dispositivo()
    {
        return $this->belongsTo(TipoDispositivo::class,'tipo_dispositivo_id');
    }

    //relacion 1 a muchos
    public function consumo_electricos()
    {
        return $this->hasMany(ConsumoElectrico::class);
    }

    //relacion 1 a muchos
    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }
}
