<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Phase1Request;
use App\Phase1;
use App\Project;
use App\Phase1Comment;
use App\NodalUsers;
use App\Assigned;

class Phase1Controller extends Controller
{
      //
      public function display($id){
        $phasedata = Phase1::find($id); //Write the id from the table 'id'
        return view('implementing_phase1')->with('phasedata',$phasedata);
          //return view('implementing_phase1')->with('id',$id);
      }

      public function store(Phase1Request $request,$id){
          $phasedata = Phase1::find($id);
          $phasedata->update($request->all());

          $projectid = Project::where('phase1_id','=',$id)->first();
          error_log('Project = '.$projectid->id);
          
          $nodalusersid = DB::table('nodal_users')
                     ->select(DB::raw('id'))
                     ->whereColumn([
                    ['phase_no', '=', 1],
                    ['pending', '=', 'min(pending)']
                ])->first();
                     error_log("hiiiii");
          $nodalusersid->update(['pending'=>$nodalusersid->pending+1]);
          
          Assigned::create(['phase_no'=>1,'status'=>0,'nodal_id'=>$nodalusersid,'phase_id'=>$id,'project_id'=>$projectid]);

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
          error_log("hi");
          $phasedata = Phase1::find($id);
          $phasedata->update($request->all());
          return redirect()->route('implementing_dashboard');
      }
      public function saveComments(Request $request){
          Phase1Comment::create($request->all());
          return redirect()->route('nodal_phase1');
      }
}
