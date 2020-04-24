<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taches extends Model
{
    public function users(){
        return $this->belongsTo(Projet::class);
    }
}
