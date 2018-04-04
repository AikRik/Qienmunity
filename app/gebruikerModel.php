<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gebruikerModel extends Model
{
    public function communityPosts(){
        return $this->hasMany('App\communityModel','gebruiker_id');
    }
    
    public function nieuwsPosts(){
        return $this->hasMany('App\nieuwsModel','gebruiker_id');
    }
    
    public function resourcePosts(){
        return $this->hasMany('App\resourceModel','gebruiker_id');
    }
    
    public function comments(){
        return $this->hasMany('App\commentModel','gebruiker_id');
    }
    public function profile(){
        return $this->hasOne('App\profielModel','gebruiker_id');
    }
    
}
