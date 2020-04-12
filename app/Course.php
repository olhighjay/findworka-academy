<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{

    use SoftDeletes;


    protected $fillable = [
        'name', 'description'
    ];

    protected $dates = ['deleted_at'];


    public function program()
    {
        return $this->belongsToMany(Program::class);  
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function assignment()
    {
        return $this->hasMany('App\Assignment');
    }
}
