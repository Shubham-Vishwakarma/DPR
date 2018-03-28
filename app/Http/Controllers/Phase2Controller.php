<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phase2;
use App\Phase2Comment;

class Phase2Controller extends Controller
{
    //
    public function display(){
        return view('implementing_phase2');
    }

    public function store(Request $request){
        Phase2::create($request->all());
        return redirect()->route('implementing_phase2');
    }

    public function displayNodal(){
        $phase2 = Phase2::find(1); //Write the id from the table 'id'
        return view('nodal_phase2')->with('phase2',$phase2);
    }

    public function storeComments(Request $request){
        Phase2Comment::create($request->all());
        return redirect()->route('nodal_phase2');
    }
}
