<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registre extends Model
{
    public function Registre()
    {
        return $this->belongsTo(Registre::class);
    }
}

