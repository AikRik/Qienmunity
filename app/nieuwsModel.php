<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nieuwsModel extends Model
{
    public function gebruiker(){
        return $this->belongsTo('gebruikerModel','id');
    }
    
    public function comments(){
       return $this->hasMany('commentModel', 'nieuws_id');
    }
}
