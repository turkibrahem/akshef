<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class doc extends Authenticatable
{
    use Notifiable;
    protected $guard ="doctor";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','specialty','telephone','Address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function article (){
        return $this->hasMany('App\article');
    }
    public function diseases(){
        return $this->hasMany('App\disease');
    }
}
