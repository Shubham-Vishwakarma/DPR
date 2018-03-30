<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Phase1Request
use App\Phase1;
use App\Phase1Comment;

class Phase1Controller extends Controller
{
      //
      public function display(){
          return view('implementing_phase1');
      }

      public function store(Phase1Request $request){
          Phase1::create($request->all());
          return redirect()->route('implementing_phase1');
      }

      public function displayNodal(){
          $phasedata = Phase1::find(1); //Write the id from the table 'id'
          return view('nodal_phase1')->with('phasedata',$phasedata);
      }

      public function storeComments(Request $request){
          Phase1Comment::create($request->all());
          return redirect()->route('nodal_phase1');
      }
      public function save(Request $request){
          Phase1::create($request->all());
          return redirect()->route('implementing_phase1');
      }
      public function saveComments(Request $request){
          Phase1Comment::create($request->all());
          return redirect()->route('nodal_phase1');
      }
}
