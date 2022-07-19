<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adjunto extends Model
{
    use HasFactory;

    //relación uno a muchos inversa
    public function tramites()
    {
        return $this->belongsTo(Tramite::class);
    }
}