<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_trams extends Model
{
    use HasFactory;

    //relación uno a muchos inversa
    public function unidad_orgs()
    {
        return $this->belongsTo(unidad_orgs::class);
    }
    //relación uno a muchos
    public function tramites()
    {
        return $this->hasMany(tramites::class);
    }
}
