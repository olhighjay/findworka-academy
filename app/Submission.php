<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    public function user()
    {
      return $this->belongsTo('App\User');  
    }

    public function assignment()
    {
      return $this->belongsTo('App\Assignment');  
    }
}
