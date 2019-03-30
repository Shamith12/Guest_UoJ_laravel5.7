<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;
use App\User;
use Auth;

class UserController extends Controller
{
    public function profile()
    {
        $user=Auth::user();
        return view('profile',compact('user'));
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('editprofile',compact('user'));
        
    }
    public function update(Request $request,$id)
    {
       $user = User::find($id);
       $user->Uname=$request->Uname;
       $user->Empno=$request->Empno;
       $user->Email=$request->Email;
       $user->gender=$request->gender;
       $user->faculty=$request->faculty;
       $user->Nicno=$request->Nicno;
       $user->Department=$request->Department;
       $user->Position=$request->Position;
       $user->Pno=$request->Pno;
       $user->update();
       
        
    }

}
