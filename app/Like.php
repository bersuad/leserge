<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class like extends Model
{
	use likableTrait;
    protected $guarded=[];

    public function likable(){
    	return $this->morphTo();
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
