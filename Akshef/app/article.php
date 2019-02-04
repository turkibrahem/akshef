<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
 protected $table='article'; 
 public $primaryKey = 'id';
 // Timestamps
 public $timestamps = true;
//


public function docs(){
    return $this->belongsTo('App\doc');
}
}
