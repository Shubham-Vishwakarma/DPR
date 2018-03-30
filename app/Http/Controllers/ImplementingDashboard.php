<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Phase1;
use App\Project;
use Illuminate\Support\Facades\Auth;

class ImplementingDashboard extends Controller
{
    public function create_project(){
          $id = Auth::id();
          error_log('Auth');
          error_log('Auth id = ' . $id);
          $phase1=Phase1::create(['status'=>'0']);
          $project=Project::create(['phase1_id'=>$phase1->id,'implementing_agency_id'=>$id]);
          return redirect()->route('implementing_phase1',$phase1->id);
    }
    public function getProject(){
        $id = Auth::id();
        //$userproject=Project::where('implementing_agency_id',$id)->get();
        $userproject=DB::table('projects')->join('phase1', 'projects.phase1_id', '=', 'phase1.id')->where('implementing_agency_id',$id)->get();
        return view('new_implement_dash')->with('userproject',$userproject);
    }
}
