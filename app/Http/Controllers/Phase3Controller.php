<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phase3;
use App\Phase3Comment;
use Carbon;
use App\Http\Requests\Phase3Request;

class Phase3Controller extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function display($id){
        return view('implementing_phase3')->with('id',$id);
    }

    public function store(Request $request,$id){
      switch ($request->final) {
        case 'save_final':
        $phasedata = Phase3::find($id);
        $phasedata->update($request->all());
        return redirect()->route('implementing_dashboard');
          break;

          case 'submit_final':
          $phasedata = Phase3::find($id);
          $phasedata->update($request->all());
          $phasedata->dos=Carbon\Carbon::now()->toDateTimeString();
          $phasedata->status=1;
          $phasedata->save();
          $min = DB::table('nodal_users')->where('phase_no','3')->min('pending');
          $nodalID=NodalUsers::where('pending',$min)->select("id")->first();
          $nodalIDpending=NodalUsers::where('pending',$min)->first();
          $nodalIDpending->pending+=1;
          $nodalIDpending->save();
          $pid=Project::where('phase3_id',$id)->first();
          $id1 = DB::table('assigneds')->insertGetId(['phase_no' => '3', 'status' => 0,"nodal_id"=>$nodalID->id ,"phase_id"=>$id,"project_id"=>$pid->id ]);
            return redirect()->route('implementing_dashboard');
            break;
      }
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
