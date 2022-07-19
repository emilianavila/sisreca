<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    
    //relación uno a uno inversa
    public function nits()
    {
        return $this->belongsTo(Nit::class);
    }
    //relación uno a uno
    public function contribuyentes()
    {
        return $this->hasOne(Contribuyente::class);
    }
}