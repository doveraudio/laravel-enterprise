<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'user_id',
        'body'
    ];
    protected $hidden = [
       
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function attachments(){
        return $this->belongsToMany('App\Attachments');
    }


}
