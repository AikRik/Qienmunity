<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nieuwspost extends Model
{
    public $primaryKey ='id';
    public $timestamps = true;
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function comments(){
       return $this->hasMany('App\Comment');
    }
    
}
