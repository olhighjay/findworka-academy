<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    #Linking User to Gender in one to many
     public function user()
    {
        return $this->hasMany('App\User');
    }

    public function admin()
    {
        return $this->hasMany('App\Admin');
    }

}
