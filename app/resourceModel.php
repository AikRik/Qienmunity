<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resourceModel extends Model
{
    public function gebruiker(){
        return $this->belongsTo('gebruikerModel','id');
    }
    
    public function comments(){
      return  $this->hasMany('commentModel', 'rs_id');
    }
}
