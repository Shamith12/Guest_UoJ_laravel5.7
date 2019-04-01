<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class check_available_room_contoller extends Controller
{
    public function checkdate(Request $request){
         
        $start_date = $request->input('startdate');   
        $end_date  = $request->input('enddate');

        dd($start_date);
    
    
    }            
}
