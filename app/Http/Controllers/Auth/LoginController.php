<?php

/**
   * @name:        Login controller
   * @author:      Zaid - Patrik - Henry
   * @description: Login view , Where to redirect users after login.
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    /*
     This controller handles authenticating users for the application and redirecting them to home screen.
    */
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     * @var string
     */
    protected $redirectTo;

    public function redirectTo()
    {
        switch (Auth::user()->role)
        {
            case "admin":
                $this->redirectTo = '/admin';
                return $this->redirectTo;
            break;
            case "manager":
                $this->redirectTo = '/manager';
                return $this->redirectTo;
            break;
            case "client":
                $this->redirectTo = '/client';
                return $this->redirectTo;
            break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }


    }

    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }
}
