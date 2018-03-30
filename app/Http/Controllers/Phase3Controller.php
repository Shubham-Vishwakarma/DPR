<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phase3;
use App\Phase3Comment;
use App\Http\Requests\Phase3Request;

class Phase3Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function display(){
        return view('implementing_phase3');
    }

    public function store(Phase3Request $request){
        Phase3::create($request->all());
        return redirect()->route('implementing_phase3');
    }

    public function displayNodal(){
        $phase3 = Phase3::find(1); //Write the id from the table 'id'
        return view('nodal_phase3')->with('phase3',$phase3);
    }

    public function storeComments(Request $request){
      Phase3Comment::create($request->all());
      return redirect()->route('nodal_phase3');
    }

    public function saveComments(Request $request){
      Phase3Comment::create($request->all());
      return redirect()->route('nodal_phase3');
    }
}
