<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comptabilite extends Model
{
    public function Comptabilite()
    {
        return $this->belongsTo(Comptabilite::class);
    }
}

