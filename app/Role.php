<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // protected
    protected $fillable = ["name", "slug", "description", "active"];
    

    public function permissions(){
        return $this->belongsToMany('App\Permission');
    }
    
    public function users(){
        return $this->belongsToMany('App\User');
    }
    public function authorize(string $attribute, string $activity){
        foreach($this->permissions()->get() as $perm){
            if($perm->check($attribute, $activity)){
                
                return true;
            }
            
        }
        return false;
    }
    public static function slug(string $slug){
        return Role::where('slug', $slug)->get()->first();
    }
}
