<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public function post(){
    	return $this->belongsTo('App\post');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
