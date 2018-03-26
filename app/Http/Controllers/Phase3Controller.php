<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phase3;

class Phase3Controller extends Controller
{
    //
    public function display(){
        return view('implementing_phase3');
    }

    public function store(Request $request){
        Phase3::create($request->all());
        return redirect()->route('implementing_phase3');
    }
}
