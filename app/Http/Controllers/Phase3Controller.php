<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phase3;

class Phase3Controller extends Controller
{
    public function phase3_store (Request $request) {
    	$flight = new Phase3;

        $flight->name = $request->name;

        $flight->save();
    }
}
