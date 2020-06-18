<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jobs;

class jobsController extends Controller
{
    
    public function getJobs(Request $request)
    {
        $jobs = jobs::get();
        return view('jobs', compact('jobs'));
    }
}
