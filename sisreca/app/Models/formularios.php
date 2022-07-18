<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formularios extends Model
{
    use HasFactory;
    //relación uno a muchos inversa
    public function alicuotas()
    {
         return $this->belongsTo(alicuotas::class);
    }
    //relación uno a muchos
    public function declaraciones()
    {
        return $this->hasMany(declaraciones::class);
    }
    //relación muchos a muchos
    public function casilla_impuestos()
    {
         return $this->belongsToMany(casilla_impuestos::class);
    }
}
