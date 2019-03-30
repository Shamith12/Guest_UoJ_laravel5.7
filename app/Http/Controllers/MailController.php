<?php

namespace App\Http\Controllers;


use App\Order;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;


class MailController extends Controller
{
    public function send($Empno){
        Mail::send (['text'=>'send'],['name'=>'gunwardhana'],function($message){
           
            $message ->to('dilshandilip6@gmail.com','To Dilshan');
            $message ->to('gunawardhanaudara@gmail.com','To Dilshan')
            ->subject('Test Email');
 
            $message ->from('gunawardhanaudara@gmail.com','gunwardhana');

        });
    }

}
