<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;


    protected function redirectTo(){
        if(Auth()->user()->role_id == 1 ){
            return route('admin.index');
        }elseif (Auth()->user()->role_id ==  2) {
            return route('editor.index');
        }elseif (Auth()->user()->role_id ==  3) {
            return route('orgadmin.index');
        }elseif (Auth()->user()->role_id ==  4) {
            return route('orgeditor.index');
        }elseif (Auth()->user()->role_id ==  5) {
            return route('orgmember.index');
        }elseif (Auth()->user()->role_id ==  6) {
            return route('user.index');
        }
    }



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
