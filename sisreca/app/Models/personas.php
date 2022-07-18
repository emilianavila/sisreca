<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personas extends Model
{
    use HasFactory;
    
    //relación uno a uno inversa
    public function nits()
    {
        return $this->belongsTo(nits::class);
    }
    //relación uno a uno
    public function contribuyentes()
    {
        return $this->hasOne(contribuyentes::class);
    }
}
