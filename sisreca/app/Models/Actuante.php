<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actuante extends Model
{
    use HasFactory;

    //relación uno a uno inversa
    public function contribuyentes()
    {
        return $this->belongsTo(Contribuyente::class);
    }
    //relación uno a muchos inversa
    public function declaraciones()
    {
         return $this->belongsTo(Declaracion::class);
    }
}