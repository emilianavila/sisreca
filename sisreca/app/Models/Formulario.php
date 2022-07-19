<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;
    //relación uno a muchos inversa
    public function alicuotas()
    {
         return $this->belongsTo(Alicuota::class);
    }
    //relación uno a muchos
    public function declaraciones()
    {
        return $this->hasMany(Declaracion::class);
    }
    //relación muchos a muchos
    public function casilla_impuestos()
    {
         return $this->belongsToMany(Casilla_impuesto::class);
    }
}