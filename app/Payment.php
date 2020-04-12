<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function program()
    {
      return $this->belongsTo('App\Program');  
    }

    public function user()
    {
      return $this->belongsTo('App\User');  
    }


}
