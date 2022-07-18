<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actuantes extends Model
{
    use HasFactory;

    //relación uno a uno inversa
    public function contribuyentes()
    {
        return $this->belongsTo(contribuyentes::class);
    }
    //relación uno a muchos inversa
    public function declaraciones()
    {
         return $this->belongsTo(declaraciones::class);
    }



}
