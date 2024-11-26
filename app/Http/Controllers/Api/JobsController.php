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

    public function store(Request $request)
    {
        $jobs = Jobs::create([
            'title' => $request->title,
            'description' => $request->description,
            'company_name' => $request->company_name,
            'job_portal' => $request->job_portal,
            'work_type' => $request->work_type,
            'work_mode' => $request->work_mode,
            'salary_range' => $request->salary_range,
            'notes' => $request->notes,
            'status' => $request->status
        ]);

        $jobs->save();
        return response()->json($jobs, 200);
    }

    public function show(string $job_id)
    {
        $jobs = Jobs::find($job_id);
        return response()->json($jobs, 200);
    }

    public function update(Request $request, string $id)
    {
        $jobs = Jobs::find($id);

        $jobs->update([
            'title' => $request->title,
            'description' => $request->description,
            'company_name' => $request->company_name,
            'job_portal' => $request->job_portal,
            'work_type' => $request->work_type,
            'work_mode' => $request->work_mode,
            'salary_range' => $request->salary_range,
            'notes' => $request->notes,
            'status' => $request->status
        ]);

        $jobs->save();
        return response()->json($jobs, 200);
    }


    public function destroy(string $id)
    {
        $jobs = Jobs::find($id);
        $jobs->delete();
    }
}
