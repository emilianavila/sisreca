<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adjuntos extends Model
{
    use HasFactory;

    //relación uno a muchos inversa
    public function tramites()
    {
        return $this->belongsTo(tramites::class);
    }
}
