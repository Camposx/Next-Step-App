<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Jobs;
use App\Models\Jobs_trackings;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobsTrackingsTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfCanGetAllJobsTracksFromJson(){
        Jobs::factory(1)->create();
        Jobs_trackings::factory(4)->create();
        $response = $this->get(route('apiHomeTrack'));

        $response->assertStatus(200)
            ->assertJsonCount(4);
    }

    public function test_CheckIfCanShowOneJobTrackFromJson(){
        Jobs::factory(1)->create();
        $jobTrack = Jobs_trackings::factory()->create();

        $response = $this->get(route('apiShowTrack', $jobTrack->id));
        $response->assertStatus(200)
            ->assertJsonFragment(['step_name' => $jobTrack->step_name]);
    }

    public function test_CheckIfCanStoreJobsWithApi(){
        Jobs::factory(1)->create();

        $data = [
            'job_id' => 1,
            'step_name' => 'Test step name',
            'notes' => 'This is the track notes',
            'track_status' => 'Test track status'
        ];

        $response = $this->post(route('apiStoreTrack'), $data);
        $response->assertStatus(200)
            ->assertJsonFragment(['notes' => 'This is the track notes']);;

        $response = $this->get(route('apiHomeTrack'));
        $response->assertStatus(200)
            ->assertJsonCount(1);
    }

    public function test_CheckIfCanUpdateJobWithApi(){
        Jobs::factory(1)->create();
        $jobTrack = Jobs_trackings::factory()->create();

        $response = $this->get(route('apiHomeTrack'));
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment(['step_name' => $jobTrack->step_name]);

        $response = $this->put(route('apiUpdateTrack', $jobTrack->id),
        [
            'job_id' => $jobTrack->id,
            'step_name' => $jobTrack->step_name,
            'notes' => $jobTrack->notes,
            'track_status' => 'Modified status'
        ]);

        $response = $this->get(route('apiHomeTrack'));
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment(['track_status' => 'Modified status']);
    }

    public function test_CheckIfCanDeleteJobTrackWithApi(){
        Jobs::factory(1)->create();
        Jobs_trackings::factory(2)->create();

        $response = $this->delete(route('apiDestroyTrack', 1));
        $this->assertDatabaseCount('jobs_trackings', 1);

        $response = $this->get(route('apiHomeTrack'));
        $response->assertStatus(200)
            ->assertJsonCount(1);
    }
}
