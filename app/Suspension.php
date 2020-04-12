<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suspension extends Model
{
    public function user()
    {
      return $this->hasMany('App\User');  
    }

    public function admin()
    {
      return $this->hasMany('App\Admin');  
    }
}
