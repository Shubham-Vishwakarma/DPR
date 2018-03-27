<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phase1;

class Phase1Controller extends Controller
{
      //
      public function display(){
          return view('implementing_phase1');
      }

      public function store(Request $request){
          Phase1::create($request->all());
          return redirect()->route('implementing_phase1');
      }

}
