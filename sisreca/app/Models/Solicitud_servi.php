<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud_servi extends Model
{
    use HasFactory;
    
    //relación muchos a muchos
    public function tasas_otros()
    {
         return $this->belongsToMany(Tasa_otro::class);
    }
}