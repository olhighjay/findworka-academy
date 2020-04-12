<?php

namespace App;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    public function user()
    {
        return $this->belongsToMany(User::class);
    }


    public function admin()
    {
        return $this->hasMany('App\Admin');
    }
}
