<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Phase2;
use App\Phase2Comment;
use App\Http\Requests\Phase2Request;

class Phase2Controller extends Controller
{
    public function __construct()
    {
    //    $this->middleware('auth');
    }

    public function display(){
        return view('implementing_phase2');
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
          $min = DB::table('nodal_users')->where('phase_no','2')->min('pending');
          $nodalID=NodalUsers::where('pending',$min)->select("id")->first();
          $nodalIDpending=NodalUsers::where('pending',$min)->first();
          $nodalIDpending->pending+=1;
          $nodalIDpending->save();
          $pid=Project::where('phase1_id',$id)->first();
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
