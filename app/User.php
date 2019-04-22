<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'location', 'phone_number',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts(){
        return $this->hasMany('App\post');
    }

    public function comments(){
        return $this->hasMany('App\comment');
    }

    public function profilepicture(){
        return $this->hasOne('App\profilePicture');
    }

    public function likes(){
        return $this->hasMany('App\like');
    }

    public function messages(){
        return $this->hasMany('App\messages');
    }

}
