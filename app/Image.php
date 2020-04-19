<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    /* Fillable */
    protected $fillable = [
        'title', 'path', 'auth_by', 'size'
    ];
    /* @array $appends */
    public $appends = ['url', 'uploaded_time', 'size_in_kb'];
    
    public function getUrlAttribute()
    {
        return Storage::disk('s3')->url($this->path);
    }
    public function getUploadedTimeAttribute()
    {
        return $this->created_at->diffForHumans();
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'auth_by');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'auth_by');
    }
    
    public function getSizeInKbAttribute()
    {
        return round($this->size / 1024, 2);
    }
    public static function boot()
    {
        parent::boot();
        static::creating(function ($image) {
            $image->auth_by = auth()->user()->id;
        });
    }
}