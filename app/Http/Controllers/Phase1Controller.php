<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Phase1Request;
use App\Phase1;
use DB;
use App\Assigned;
use App\Phase1Comment;

class Phase1Controller extends Controller
{
      //
      public function display($id){
        $phasedata = Phase1::find($id); //Write the id from the table 'id'
        return view('implementing_phase1')->with('phasedata',$phasedata);
          //return view('implementing_phase1')->with('id',$id);
      }

      public function store(Request $request,$id){
        $phasedata = Phase1::find($id);
        $phasedata->update($request->all());
        //$nodalID=NodalUsers::with( 'urls','prices')->where('phase_id', '=', )->min('cost')->get();
        $price = DB::table('nodal_user')->min('pending');
        error_log($price);
        //	id 	phase_no 	status 	nodal_id 	phase_id 	project_id
        $id1 = DB::table('assigneds')->insertGetId(
          ['phase_no' => '1', 'status' => 0,"nodal_id"=>"123" ,"phase_id"=>$id,"project_id"=>"23" ]);
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
      public function save(Request $request,$id){
          $phasedata = Phase1::find($id);
          $phasedata->update($request->all());
          return redirect()->route('implementing_dashboard');
      }
      public function saveComments(Request $request){
          Phase1Comment::create($request->all());
          return redirect()->route('nodal_phase1');
      }
}
