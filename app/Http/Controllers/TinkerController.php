<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Tinker as Tinker;
/**
 * 
 */
class TinkerController extends Controller
{
    public static function execute(Request $request){
        $results = [];
        $text = "";
        try {
            //code...
            $text = eval($request['code']);
        } catch (\Throwable $th) {
            return($th);
        }
        
        return $text;
    }
    
}


