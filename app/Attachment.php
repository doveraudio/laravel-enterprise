<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $fillable = [];
    protected $hidden = [];

    public function users(){
        return $this->belongsToMany('App\User');

    }

    public function posts(){
        return $this->belongsToMany('App\Post');
    }
}
