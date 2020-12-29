<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    //relacion de 1 a muchos
    public function users(){
        return $this->belongsTo(User::class);
    }
}
