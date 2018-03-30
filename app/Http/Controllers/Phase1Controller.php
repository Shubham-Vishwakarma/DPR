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
      public function __construct()
      {
            $this->middleware('auth');
      }

      public function display($id){
        $phasedata = Phase1::find($id); //Write the id from the table 'id'
        return view('implementing_phase1')->with('phasedata',$phasedata);
      }

      public function store(Request $request,$id){
        $phasedata = Phase1::find($id);
        $phasedata->update($request->all());
        $min = DB::table('nodal_users')->min('pending');
        $nodalID=NodalUsers::where('pending',$min)->select("id")->first();
        $pid=Project::where('phase1_id',$id)->first();
        $id1 = DB::table('assigneds')->insertGetId(['phase_no' => '1', 'status' => 0,"nodal_id"=>$nodalID->id ,"phase_id"=>$id,"project_id"=>$pid->id ]);
        return view('new_implementing_dashboard');
      }

      public function displayNodal($id){
          $phasedata = Phase1::find($id); //Write the id from the table 'id'
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
