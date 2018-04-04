<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commentModel extends Model
{
    public function gebruiker(){
        return $this->belongsTo('gebruikerModel','id');
    }
    
    public function nieuwsPost(){
        return $this->belongsTo('gebruikerModel','nieuws_id');
    }
    
    public function communityPost(){
        return $this->belongsTo('gebruikerModel','commu_id');
    }
    
    public function resourcePost(){
        return $this->belongsTo('gebruikerModel','rs_id');
    }
    
}
