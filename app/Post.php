<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];
    public $timestamps = false;
    
    public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function categories() {
        return $this->belongsToMany('App\Category');
    }
}


