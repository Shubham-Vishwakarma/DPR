<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phase3;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin(){
        return view('auth.login');
    }

    public function login(Request $request){
        if($request->agencyType == 'implementing'){
            if (Auth::attempt ( array (
                'email' => $request->get ( 'email' ),
                'password' => $request->get ( 'password' )
            ) ))
            {
                return redirect()->route('home');
            }
            else {
                Session::flash ( 'message', "Invalid Credentials , Please try again." );
                return Redirect::back ();
            }
        }
        elseif ($request->agencyType == 'nodal'){
            return view('nodal_phase3')->with('phase3',null);
        }
    }
}