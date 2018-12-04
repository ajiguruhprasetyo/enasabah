<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Total extends Model
{
    public function credit()
    {
        return $this->belongsTo('App\Kredit', 'id_kredit');
    }

    public function debit()
    {
        return $this->belongsTo('App\Debit', 'id_debit');
    }
}
