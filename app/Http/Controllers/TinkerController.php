<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Tinker as Tinker;
/**
 * 
 */
class TinkerController extends Controller
{

    public function __construct(){
        $this->middleware('permission:administration,access');
    }

    public function execute(Request $request){
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


