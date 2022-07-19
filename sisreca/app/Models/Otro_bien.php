<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otro_bien extends Model
{
    use HasFactory;
    
    //relación uno a uno
    public function declaraciones()
    {
        return $this->hasOne(Declaracion::class);
    }
}