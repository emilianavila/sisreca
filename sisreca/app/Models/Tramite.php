<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    use HasFactory;

    //relación uno a uno inversa
    public function refrendos()
    {
         return $this->belongsTo(Refrendo::class);
    }
    //relación uno a muchos inversa
    public function contribuyentes()
    {
         return $this->belongsTo(Contribuyente::class);
    }
    //relación uno a uno inversa
    public function declaraciones()
    {
         return $this->belongsTo(Declaracion::class);
    }
    //relación uno a muchos inversa
    public function tipo_trams()
    {
        return $this->belongsTo(Tipo_tram::class);
    }
    //relación uno a muchos
    public function adjuntos()
    {
        return $this->hasMany(Adjunto::class);
    }
}