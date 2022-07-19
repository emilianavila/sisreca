<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad_org extends Model
{
    use HasFactory;
    
    //relación uno a muchos
    public function tipo_trams()
    {
         return $this->hasMany(Tipo_tram::class);
    }
}
