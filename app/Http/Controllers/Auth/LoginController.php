<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Session;

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
     *
     */
     public function redirectTo()
    {
         $count=session()->get('cart');
         if($count)
         {
               return 'checkout';
         }
         elseif (Auth::user()->role == 'admin') {
             return 'admin-dash';
         }
         elseif (Auth::user()->role == 'pemilik') {
             return 'pemilik-dash';
         }
         else
         {
             return '/';
         }

    }


  //  protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
