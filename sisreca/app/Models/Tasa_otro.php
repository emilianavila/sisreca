<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasa_otro extends Model
{
    use HasFactory;

    //relación muchos a muchos
    public function solicitud_servis()
    {
         return $this->belongsToMany(Solicitud_servi::class);
    }
}