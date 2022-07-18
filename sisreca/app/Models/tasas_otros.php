<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tasas_otros extends Model
{
    use HasFactory;

    //relación muchos a muchos
    public function solicitud_servis()
    {
         return $this->belongsToMany(solicitud_servis::class);
    }
}
