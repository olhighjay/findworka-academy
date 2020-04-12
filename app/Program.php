<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{

    use SoftDeletes;


    protected $fillable = [
        'name', 'description'
    ];


    protected $dates = ['deleted_at'];

    
    public function course()
    {
        return $this->belongsToMany(Course::class);  
    }

    public function user()
    {
        return $this->belongsToMany(User::class)->withPivot('payment_status');
    }

    public function payment()
    {
        return $this->hasMany('App\Payment');
    }

}
