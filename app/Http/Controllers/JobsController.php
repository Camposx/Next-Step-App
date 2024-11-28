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
}
