<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class JobsController extends Controller
{
    public function index()
    {
        $jobs = Jobs::all();
        return view("home", compact("jobs"));
    }

    public function show(string $id){
        $jobs = Jobs::with('Jobs_tracking')->find($id);
        return view('show', compact('jobs'));
    }
}
