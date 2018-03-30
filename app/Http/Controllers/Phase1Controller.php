<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Phase1Request;
use App\Phase1;
use DB;
use App\Assigned;
use App\NodalUsers;
use App\Project;
use App\Phase1Comment;

class Phase1Controller extends Controller
{
      //
      public function display($id){
        $phasedata = Phase1::find($id); //Write the id from the table 'id'
        error_log("hi1");
        return view('implementing_phase1')->with('phasedata',$phasedata);
          //return view('implementing_phase1')->with('id',$id);
      }

      public function store(Request $request,$id){
          error_log("hi2");
        $phasedata = Phase1::find($id);
        error_log("hi3");
        $phasedata->update($request->all());
        error_log("hi4");
        //$nodalID=NodalUsers::with( 'urls','prices')->where('phase_id', '=', )->min('cost')->get();
        $min = DB::table('nodal_users')->min('pending');
        error_log("hi4");
        error_log($min);
        $nodalID=NodalUsers::where('pending',$min)->select("id")->first();
        //	id 	phase_no 	status 	nodal_id 	phase_id 	project_id
        error_log($nodalID);
        $pid=Project::where('phase1_id',$id)->first();
        $id1 = DB::table('assigneds')->insertGetId(
          ['phase_no' => '1', 'status' => 0,"nodal_id"=>$nodalID->id ,"phase_id"=>$id,"project_id"=>$pid->id ]);
          return view('implementing_dashboard');
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
