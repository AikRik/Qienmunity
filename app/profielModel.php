<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profielModel extends Model
{
    public function gebruiker(){
        return $this->belongsTo('gebruikerModel','id');
    }
    
    
}
