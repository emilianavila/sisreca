<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nits extends Model
{
    use HasFactory;

    //relación uno a uno
    public function personas()
    {
        return $this->hasOne(personas::class);
    }
    //relación uno a uno
    public function contribuyentes()
    {
        return $this->hasOne(contribuyentes::class);
    }

}
