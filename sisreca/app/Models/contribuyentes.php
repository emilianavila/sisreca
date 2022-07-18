<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contribuyentes extends Model
{
    use HasFactory;

    //relación uno a uno inversa
    public function nits()
    {
        return $this->belongsTo(nits::class);
    }
    //relación uno a uno inversa
    public function personas()
    {
        return $this->belongsTo(personas::class);
    }
    //relación uno a uno
    public function actuantes()
    {
        return $this->hasOne(actuantes::class);
    }
    //relación uno a muchos
    public function tramites()
    {
        return $this->hasMany(tramites::class);
    }

}
