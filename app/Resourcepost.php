<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resourcepost extends Model
{
    public $primaryKey ='id';
    public $timestamps = true;
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function comments(){
      return  $this->hasMany('App\Comment');
    }
}
