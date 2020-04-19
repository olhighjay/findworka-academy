<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable implements MustVerifyEmail
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    #Linking User to Gender in many to one
    public function gender()
    {
      return $this->belongsTo('App\Gender');  
    }

    public function program()
    {
        return $this->belongsToMany(Program::class)->withPivot('payment_status');
    }

    public function course()
    {
        return $this->belongsToMany(Course::class);
    }


    public function role()
    {
        return $this->belongsToMany(Role::class);
    }


    public function assignment()
    {
        return $this->hasMany('App\Assignment');
    }

    public function submission()
    {
        return $this->hasMany('App\Submission');
    }

    public function payment()
    {
        return $this->hasMany('App\Payment');
    }

    public function suspension()
    {
      return $this->belongsTo('App\Suspension');  
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'auth_by')->latest();
    }


    public function IsStudent()
    {
        if($this->role->first()->name == 'Student'){
        // if($this->whereRoleIs('Student')){
            return true;
        }
        return false;
    }


    public function IsTutor()
    {
        if($this->role->first()->name == 'Tutor'){
            return true;
        }
        return false;
    }

    public function Active()
    {
        if($this->suspension->name == 'active'){
            return true;
        }
        return false;
    }

}
