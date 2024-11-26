<?php

namespace App\Http\Controllers\Api;

use App\Models\Jobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobsController extends Controller
{
    public function index()
    {
        $jobs = Jobs::all();
        return response()->json($jobs, 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

    }

    public function show(string $id)
    {

    }

    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {

    }


    public function destroy(string $id)
    {

    }
}
