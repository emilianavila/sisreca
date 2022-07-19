<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refrendo extends Model
{
    use HasFactory;

    //relación uno a uno
    public function tramites()
    {
        return $this->hasOne(Tramite::class);
    }
}