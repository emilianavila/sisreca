<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alicuota extends Model
{
    use HasFactory;

    //relación uno a muchos
    public function formularios()
    {
        return $this->hasMany(Formulario::class);
    }
}