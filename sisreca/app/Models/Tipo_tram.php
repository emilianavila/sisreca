<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_tram extends Model
{
    use HasFactory;

    //relación uno a muchos inversa
    public function unidad_orgs()
    {
        return $this->belongsTo(Unidad_org::class);
    }
    //relación uno a muchos
    public function tramites()
    {
        return $this->hasMany(Tramite::class);
    }
}