<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
	use LikableTrait;
	
	public function comments(){
        return $this->hasMany('App\comment');
    }
    
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function likes(){
    	return $this->hasMany('App\like');
    }
}
