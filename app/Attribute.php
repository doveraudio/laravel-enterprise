<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    // protected
    protected $fillable = ["name", "slug", "description", "active"];


    public function permissions(){

        return $this->belongsToMany('App\Permission');

    }
    public function roles(){
        $p = $this->permissions()->get()->all();
        $r = [];
        foreach($p as $i){
            $r[] = $i->roles()->get(); 
        }
        return $r;
    }

    public static function slug(string $slug)
    {
        return Attribute::where('slug', $slug)->get()->first();
    }
}
