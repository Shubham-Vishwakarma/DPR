<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phase1;


class NodalPhase1Controller extends Controller
{
  public function displayNodal(){
      $phasedata = Phase1::find(1); //Write the id from the table 'id'
      return view('nodal_phase1')->with('phasedata',$phasedata);
  }
}
