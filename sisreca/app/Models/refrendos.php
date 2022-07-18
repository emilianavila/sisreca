<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class refrendos extends Model
{
    use HasFactory;

    //relación uno a uno
    public function tramites()
    {
        return $this->hasOne(tramites::class);
    }
}
