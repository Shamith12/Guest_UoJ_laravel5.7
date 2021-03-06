<?php

namespace App\Http\Controllers;


use App\Order;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use DB;

class MailController extends Controller
{
    public function send(){
      
        $id = 001;
        $gmail = DB::table('users')
                 ->where('Empno','=',$id)
                ->select('Email')
                ->get();
      
        $data = array('name'=>"UOJ_Guest_House");
        Mail::send ('send',$data,function($message){
           
            // $message ->to('dilshandilip6@gmail.com','To Dilshan');
            $message ->to('gunawardhanaudara@gmail.com')
            ->subject('UOJ');
            $message ->from('gunawardhanaudara@gmail.com','gunwardhana');

            echo "Basic Email Sent. Check your inbox.";
            
        });
       
    }

    

}
