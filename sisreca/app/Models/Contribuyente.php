<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribuyente extends Model
{
    use HasFactory;

    //relación uno a uno inversa
    public function nits()
    {
        return $this->belongsTo(Nit::class);
    }
    //relación uno a uno inversa
    public function personas()
    {
        return $this->belongsTo(Persona::class);
    }
    //relación uno a uno
    public function actuantes()
    {
        return $this->hasOne(Actuante::class);
    }
    //relación uno a muchos
    public function tramites()
    {
        return $this->hasMany(Tramite::class);
    }
}