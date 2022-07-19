<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Declaracion extends Model
{
    use HasFactory;

    //relación uno a uno inversa
    public function bien_inmuebles()
    {
        return $this->belongsTo(Bien_inmueble::class);
    }
    //relación uno a uno inversa
    public function otros_bienes()
    {
         return $this->belongsTo(Otro_bien::class);
    }
    //relación uno a muchos inversa
    public function formularios()
    {
         return $this->belongsTo(Formulario::class);
    }
    //relación uno a muchos
    public function actuantes()
    {
         return $this->hasMany(Actuante::class);
    }
    //relación uno a uno
    public function tramites()
    {
        return $this->hasOne(Tramite::class);
    }
}