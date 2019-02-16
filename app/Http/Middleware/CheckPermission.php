<?php

namespace App\Http\Middleware;

use Closure;
use App\Permission;
class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $attribute
     * @param  string  $activity
     * @return mixed
     */
    public function handle($request, Closure $next, string $attribute, string $activity)
    {
        //var_dump($request->user()->roles()->get());
        //die;// "THIS IS THE TRUE";
        if($request->user()!==null){
            if($request->user()->authorize($attribute, $activity)){
                return $next($request);
            }else{
                if ($request->ajax()) {
                    return response('Unauthorized.', 401);
             } 
            }
        }
        return redirect()->guest('/home');
        }
    }
    

