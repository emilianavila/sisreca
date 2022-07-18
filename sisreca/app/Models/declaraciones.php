<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class declaraciones extends Model
{
    use HasFactory;

    //relación uno a uno inversa
    public function bien_inmuebles()
    {
        return $this->belongsTo(bien_inmuebles::class);
    }
    //relación uno a uno inversa
    public function otros_bienes()
    {
         return $this->belongsTo(otros_bienes::class);
    }
    //relación uno a muchos inversa
    public function formularios()
    {
         return $this->belongsTo(formularios::class);
    }
    //relación uno a muchos
    public function actuantes()
    {
         return $this->hasMany(actuantes::class);
    }
    //relación uno a uno
    public function tramites()
    {
        return $this->hasOne(tramites::class);
    }
}
