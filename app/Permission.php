<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    // protected
    protected $fillable = ["name", "slug", "description", "active"];
    
/**
 * Check:
 * Discover Attribute and Activity if allowed by this Permission.
 * Activities apply to all Attributes assigned to Permission.
 * Any Attributes on permission get all the activities assigned to it as well.
 *  A permission like this:
 * user, client -> access, create, review, update, delete
 * Is the same as Two permissions like this:
 * user -> access, create, review, update, delete
 * client -> access, create, review, update, delete
 * So for both, authorize('user', 'access') would return true.
 * @param string $attribute
 * @param string $activity
 * @return void
 */
    public function check(string $attribute, string $activity){
        foreach($this->attributes()->get() as $att){
            if($att->slug == $attribute){
                foreach($this->activities()->get() as $act){
                    if($act->slug == $activity){
                        return true;
                    }
                }
            }
        }
        return false;
    }

    public function activities(){

        return $this->belongsToMany('App\Activity');

    }

    public function attributes(){
        return $this->belongsToMany('App\Attribute');
    }

    public function roles(){
        return $this->belongsToMany('App\Role');
    }

    public function users(){
        return $this->belongsToMany('App\User')->using('App\UserRole');
    }
    
    public static function slug(string $slug)
    {
        return Permission::where('slug', $slug)->get()->first();
    }
}
