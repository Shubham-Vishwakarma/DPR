<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Assigned;
use App\Project;
use App\Phase1;
use Illuminate\Support\Facades\DB;

class NodalController extends Controller
{
    // public function __construct()
    // {
    // //    $this->middleware('auth');
    // }

    public function displayDashboard(){
        $id = Auth::guard('nodal_user')->id();

        $phase_no = '';

        $project_pending = Assigned::where('nodal_id','=',$id)->where('status','=',0)->get();
        $completed_projected = Assigned::where('nodal_id','=',$id)->where('status','=',1)->get();

        $pendings = array();
        $completed = array();

        foreach ($project_pending as $pending){
            $phase_no = $pending->phase_no;
            $project = Project::where('id','=',$pending->project_id)->first();
            array_push($pendings,$project);
        }

        foreach ($completed_projected as $complete){
            $phase_no = $complete->phase_no;
            $project = Project::where('id','=',$complete->project_id)->first();
            array_push($completed,$project);
        }

        return view('nodal_dashboard')->with('completed',$completed)->with('pendings',$pendings)->with('phase_no',$phase_no);
    }
}
