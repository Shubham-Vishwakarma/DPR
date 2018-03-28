<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NodalUsers;
use App\License;
use App\User;

class ValidateEmail extends Controller
{
  public function display(){
      return view('register');
  }
  public function store(Request $reques){
    //NodalUsers::create($request->all());
      $lic_no=$request->lic;
      $email=$request->email;
      $phone=$request->phone;
      $password=$request->password;
      //License::create($request->all());

      $licdata=License::find(lic_no);



    return redirect()->route('login');
  }
}
