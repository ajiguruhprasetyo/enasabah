<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    public $fillable = ['nama', 'alamat']; 

    public function debit(){
        return $this->hasMany('App\Debit');
    }

    public function kredit(){
        return $this->hasMany('App\Kredit');
    }
}
