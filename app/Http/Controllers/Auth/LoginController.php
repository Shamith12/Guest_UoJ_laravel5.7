<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

   
    public function username()
    {
        $loginType = request()->input('Empno');
        $this->Empno = filter_var($loginType,FILTER_VALIDATE_EMAIL) ? 'Email' : 'Empno';
        request()->merge([$this->Empno=>$loginType]);

        return property_exists($this,'Empno') ? $this->Empno : 'Email';
    }

    protected function credentials(Request $request)
    {
        $credentials = $request->only($this->username(),'password');
        $credentials = array_add($credentials ,'Crts','1');
        return $credentials ;
    }

  

}