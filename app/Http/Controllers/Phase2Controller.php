<?php

namespace App\Http\Controllers;


use App\NodalUsers;
use App\Project;
use Illuminate\Http\Request;
use App\Phase2;
use App\Phase2Comment;
use Carbon;
use App\Assigned;
use App\Http\Requests\Phase2Request;
use Illuminate\Support\Facades\DB;

class Phase2Controller extends Controller
{
    public function __construct()
    {
    //    $this->middleware('auth');
    }

    public function display($id){
        return view('implementing_phase2')->with('id',$id);
    }

    public function store(Request $request, $id){
      switch ($request->final) {
        case 'save_final':
        $phasedata = Phase2::find($id);
        $phasedata->update($request->all());
        return redirect()->route('implementing_dashboard');
          break;

          case 'submit_final':
          $phasedata = Phase2::find($id);
          $phasedata->update($request->all());
            $phasedata->dos= Carbon\Carbon::now()->toDateTimeString();
            $phasedata->status=1;
            $phasedata->save();
          $min = DB::table('nodal_users')->where('phase_no','2')->min('pending');
          $nodalID=NodalUsers::where('pending',$min)->select("id")->first();
          $nodalIDpending=NodalUsers::where('pending',$min)->first();

          $nodalIDpending->pending+=1;
          $nodalIDpending->save();
          $pid=Project::where('phase2_id',$id)->first();
          $id1 = DB::table('assigneds')->insertGetId(['phase_no' => '2', 'status' => 0,"nodal_id"=>$nodalID->id ,"phase_id"=>$id,"project_id"=>$pid->id ]);
            return redirect()->route('implementing_dashboard');
            break;
      }
    }

    public function displayNodal($id){
        $phase2 = Phase2::find($id); //Write the id from the table 'id'
        return view('nodal_phase2')->with('phase2',$phase2);
    }

    public function storeComments(Request $request){
        Phase2Comment::create($request->all());
        return redirect()->route('nodal_dashboard');
    }

    public function saveComments(Request $request){
        Phase2Comment::create($request->all());
        return redirect()->route('nodal_dashboard');
    }
}
