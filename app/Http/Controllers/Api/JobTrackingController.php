<?php

namespace App\Http\Controllers\Api;

use App\Models\Jobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs_trackings;

class JobTrackingController extends Controller
{
    public function index()
    {
        $jobs_track = Jobs_trackings::all();
        return response()->json($jobs_track, 200);
    }

    public function store(Request $request)
    {
        $jobs_track = Jobs_trackings::create([
            'job_id' => $request->job_id,
            'step_name' => $request->step_name,
            'notes' => $request->notes,
            'track_status' => $request->track_status
        ]);

        $jobs_track->save();
        return response()->json($jobs_track, 200);
    }

    public function show(string $job_id)
    {
        $jobs_track = Jobs_trackings::find($job_id);
        return response()->json($jobs_track, 200);
    }

    public function update(Request $request, string $id)
    {
        $jobs_track = Jobs_trackings::find($id);

        $jobs_track->update([
            'job_id' => $request->job_id,
            'step_name' => $request->step_name,
            'notes' => $request->notes,
            'track_status' => $request->track_status
        ]);

        $jobs_track->save();
        return response()->json($jobs_track, 200);
    }


    public function destroy(string $id)
    {
        $jobs_track = Jobs_trackings::find($id);
        $jobs_track->delete();
    }
}
