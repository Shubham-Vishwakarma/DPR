<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phase3;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin(){
        return view('auth.login');
    }

    public function login(Request $request){
        if($request->agencyType == 'implementing'){
            if (Auth::guard('user')->attempt ( array (
                'email' => $request->get ( 'email' ),
                'password' => $request->get ( 'password' )
            ) ))
            {
                return redirect()->route('implementing_dashboard');
            }
            else {
                Session::flash ( 'message', "Invalid Credentials , Please try again." );
                return Redirect::back ();
            }
        }
        elseif ($request->agencyType == 'nodal'){
            if (Auth::guard('nodal_user')->attempt ( array (
                'email' => $request->get ( 'email' ),
                'password' => $request->get ( 'password' )
            ) ))
            {
                return redirect()->route('nodal_dashboard');
            }
            else {
                Session::flash ( 'message', "Invalid Credentials , Please try again." );
                return Redirect::back ();
            }
        }
    }
}
