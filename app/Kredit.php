<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kredit extends Model
{
    public function nasabahs(){
        return $this->belongsTo('App\Nasabah', 'id_k_nasabah');
    }

    public function total()
    {
        return $this->hasMany('App\Total');
    }
}
