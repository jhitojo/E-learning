<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


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
    //protected $redirectTo = RouteServiceProvider::HOME;

    protected function authenticated( $request, $user) 
    {
        if(Auth::check()) {
            if (Auth::user()->role == 'Admin') {
                return redirect()->route('admin');
            }
            if (Auth::user()->role == 'Dosen') {
                return redirect()->route('dosen');
            }
            if (Auth::user()->role == 'Mahasiswa') {
                return redirect()->route('mahasiswa');
            }
        } 

    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $username;


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function showLoginForm()
    // {
    //     return view('login');
    // }

}
