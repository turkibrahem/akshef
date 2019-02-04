<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class disease extends Model
{
    protected $table = 'diseases' ;
    public function docs(){
        return $this->belongsTo('App\doc');
    }
}
