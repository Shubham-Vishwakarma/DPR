<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Phase1Request;
use App\Phase1;
use Illuminate\Support\Facades\DB;
use Carbon;
use App\Assigned;
use App\NodalUsers;
use App\Project;
use App\Phase1Comment;

class Phase1Controller extends Controller
{
      public function __construct()
      {
          //  $this->middleware('auth');
      }

      public function display($id){
        $phasedata = Phase1::find($id); //Write the id from the table 'id'
        return view('implementing_phase1')->with('phasedata',$phasedata);
      }

      public function store(Request $request,$id){
        switch ($request->final) {
          case 'save_final':
          $phasedata = Phase1::find($id);
          $phasedata->update($request->all());
          return redirect()->route('implementing_dashboard');
            break;

            case 'submit_final':
            $phasedata = Phase1::find($id);
            $phasedata->update($request->all());
            $phasedata->dos= Carbon\Carbon::now()->toDateTimeString();
            $phasedata->status=1;
            $phasedata->save();
            $min = DB::table('nodal_users')->where('phase_no','1')->min('pending');
            $nodalID=NodalUsers::where('pending',$min)->select("id")->first();
            $nodalIDpending=NodalUsers::where('pending',$min)->first();
            $nodalIDpending->pending+=1;
            $nodalIDpending->save();
            $pid=Project::where('phase1_id',$id)->first();
            $id1 = DB::table('assigneds')->insertGetId(['phase_no' => '1', 'status' => 0,"nodal_id"=>$nodalID->id ,"phase_id"=>$id,"project_id"=>$pid->id ]);
              return redirect()->route('implementing_dashboard');
              break;
        }

      }

      public function displayNodal($id){
          $phasedata = Phase1::find($id); //Write the id from the table 'id'
          error_log('Phase1' . $phasedata->id);
          return view('nodal_phase1')->with('phasedata',$phasedata);
      }

      public function storeComments(Request $request,$id){
          error_log('Id = ' . $id);
          if($request->button == 'submit') {
              $phase1 = Phase1::find($id);
              $phase1->update(['status' => 2]);
              $project = Project::where('phase1_id',$id)->first();
              $project->update(['phase1_status' => 1]);

              $assign = Assigned::where('phase_id',$id)->where('phase_no','1')->first();
              $assign->update(['status' => '1']);

              return redirect()->route('nodal_dashboard');
//              $phase1comm = Phase1Comment::findOrNew($id);
//              if($phase1comm->exists){
//                  $phase1comm->update($request->all());
//                  return redirect()->route('nodal_dashboard');
//              }
//              else{
//                  Phase1Comment::create([$request->all()]);
//                  return redirect()->route('nodal_dashboard');
//              }
          }
          elseif($request->button == 'resend') {
              $phase1 = Phase1::find($id);
              $phase1->update(['status' => 0]);
              $phase1comm = Phase1Comment::where('phase1_id',$id);
              if($phase1comm){
                  $phase1comm->update($request->all());
                  return redirect()->route('nodal_dashboard');
              }
              else{
                  $phase1comm = Phase1Comment::create($request->all());
                  $phase1comm->phase1_id = $id;
                  $phase1comm->save();
                  return redirect()->route('nodal_dashboard');
              }

          }
      }

      public function save(Request $request,$id){
          $phasedata = Phase1::find($id);
          $phasedata->update($request->all());
          return redirect()->route('implementing_dashboard');
      }
//      public function saveComments(Request $request){
//          Phase1Comment::create($request->all());
//          return redirect()->route('nodal_dashboard');
//      }
}
