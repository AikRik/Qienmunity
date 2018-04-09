<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function nieuwsPost(){
        return $this->belongsTo('App\Nieuwspost');
    }
    
    public function communityPost(){
        return $this->belongsTo('App\Communitypost');
    }
    
    public function resourcePost(){
        return $this->belongsTo('App\Resourcepost');
    }
    
}
