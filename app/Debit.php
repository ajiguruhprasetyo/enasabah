<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Debit extends Model
{
    public function nasabah()
    {
        return $this->belongsTo('App\Nasabah', 'id_nasabah');
    }

    public function total()
    {
        return $this->hasMany('App\Total');
    }
}
