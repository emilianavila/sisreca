<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitud_servis extends Model
{
    use HasFactory;
    
    //relación muchos a muchos
    public function tasas_otros()
    {
         return $this->belongsToMany(tasas_otros::class);
    }
}
