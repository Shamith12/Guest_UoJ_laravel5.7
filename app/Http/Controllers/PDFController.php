<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class PDFController extends Controller
{
        /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */


    //Fill the pdf details
   
    public function pdfdetails(){

        $id = 001;
        $table_details =  DB::table('bookinginfos')
                             ->join('users','bookinginfos.Empno','=','users.Empno')
                             ->where('bookinginfos.Empno','=',$id)
                             ->select('bookinginfos.Strd','bookinginfos.Endd','bookinginfos.Amount','users.Uname','users.Nicno','users.Position')
                             ->get();                              
         return view('pdf',compact('table_details'));
   }

   public function generatePDF()

    {
        $data = ['title' => 'Welcome to UoJGuestHouse'];

       $pdf = PDF::loadView('send', $data);
        return $pdf->stream('guestPayment.pdf');

    }
}
