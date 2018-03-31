<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Phase1;
use App\Phase2;
use App\Phase3;
use App\Assigned;
use App\Project;
use Illuminate\Support\Facades\Auth;

class ImplementingDashboard extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

        $phase1projects = DB::table('projects')->join('phase1', 'projects.phase1_id', '=', 'phase1.id')
                                ->where('implementing_agency_id',$id)->where('phase1_status','0')->get();

        $phase2projects = DB::table('projects')->join('phase2', 'projects.phase2_id', '=', 'phase2.id')
            ->where('implementing_agency_id',$id)->where('phase1_status','1')->where('phase2_status','0')->get();


        $phase3projects = DB::table('projects')->join('phase3', 'projects.phase3_id', '=', 'phase3.id')
            ->where('implementing_agency_id',$id)->where('phase1_status','1')->where('phase2_status','1')
            ->where('phase3_status','0')->get();

        $completedprojectsphase1 = DB::table('phase1')->where('status','2')->get();

        $completedprojectsphase2 = DB::table('phase2')->where('status','2')->get();
        $completedprojectsphase3 = DB::table('phase3')->where('status','2')->get();

        return view('new_implement_dash')->with('phase1projects',$phase1projects)
                                                ->with('phase2projects',$phase2projects)
                                                ->with('phase3projects',$phase3projects)
                                                ->with('completedprojectsphase1',$completedprojectsphase1)
                                                ->with('completedprojectsphase2',$completedprojectsphase2)
                                                ->with('completedprojectsphase3',$completedprojectsphase3);
    }
}
