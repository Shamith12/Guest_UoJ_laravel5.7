<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;
use App\User;
use Auth;
use Image;

class UserController extends Controller
{
   
    public function profile()
    {
        $user = Auth::user();
        return view('profile',compact('user'));
        //return view('Profile',array('user'=>Auth::user()));
    }

    public function update_profile1(request $request)
    {
        if($request->hasFile('img'))
        {
            $img=$request->file('img');
            $filename=time().'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(300,300)->save(public_path('/uploads/profile1/'. $filename));

            $user=Auth::user();
            $user->img=$filename;
            $user->save();
        }

       // return view('Profile',array('user'=>Auth::user()));
       return redirect()->back();
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
       return view('profile',compact('user'));
        
    }

}
