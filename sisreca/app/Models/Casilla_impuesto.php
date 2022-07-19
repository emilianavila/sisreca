<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casilla_impuesto extends Model
{
    use HasFactory;

    //relación muchos a muchos
    public function formularios()
    {
         return $this->belongsToMany(Formulario::class);
    }
}