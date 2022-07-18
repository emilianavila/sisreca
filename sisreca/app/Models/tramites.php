<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tramites extends Model
{
    use HasFactory;

    //relación uno a uno inversa
    public function refrendos()
    {
         return $this->belongsTo(refrendos::class);
    }
    //relación uno a muchos inversa
    public function contribuyentes()
    {
         return $this->belongsTo(contribuyentes::class);
    }
    //relación uno a uno inversa
    public function declaraciones()
    {
         return $this->belongsTo(declaraciones::class);
    }
    //relación uno a muchos inversa
    public function tipo_trams()
    {
        return $this->belongsTo(tipo_trams::class);
    }
    //relación uno a muchos
    public function adjuntos()
    {
        return $this->hasMany(adjuntos::class);
    }

}
