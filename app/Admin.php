<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

    /**
 * Remove 'use Illuminate\Database\Eloquent\Model;'
 */
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin extends Authenticatable
{
    use Notifiable;
// The authentication guard for admin
    protected $guard = 'admin';
     /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
    protected $fillable = [
        'email', 'password',
    ];
     /**
      * The attributes that should be hidden for arrays.
      *
      * @var array
      */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function suspension()
    {
      return $this->belongsTo('App\Suspension');  
    }

    public function gender()
    {
      return $this->belongsTo('App\Gender');  
    }

    public function role()
    {
      return $this->belongsTo('App\Role');  
    }

    public function post()
    {
      return $this->hasMany('App\Post');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'auth_by')->latest();
    }

}
