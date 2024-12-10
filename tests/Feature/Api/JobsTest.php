<?php

namespace Tests\Feature\Api;

use App\Models\Jobs;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JobsTest extends TestCase
{
    
    use RefreshDatabase;

    public function test_CheckIfCanGetAllJobsFromJson(){
        Jobs::factory(2)->create();
        $response = $this->get(route('apiHomeJob'));

        $response->assertStatus(200)
            ->assertJsonCount(2);
    }

    public function test_CheckIfCanShowOneJobFromJson(){
        $job = Jobs::factory()->create();

        $response = $this->get(route('apiShowJob', $job->id));
        $response->assertStatus(200)
            ->assertJsonFragment(['company_name' => $job->company_name]);
    }

    public function test_CheckIfCanStoreJobsWithApi(){
        $data = [
            'title' => 'Post Test',
            'description' => 'This is the test description',
            'company_name' => 'Test Company',
            'job_portal' => 'Test Portal',
            'work_type' => 'Test Type',
            'work_mode' => 'Test Mode',
            'salary_range' => 'Test Salary',
            'notes' => 'This is the test notes',
            'status' => 'Test Status'
        ];

        $response = $this->post(route('apiStoreJob'), $data);
        $response->assertStatus(200)
            ->assertJsonFragment(['company_name' => 'Test Company']);;

        $response = $this->get(route('apiHomeJob'));
        $response->assertStatus(200)
            ->assertJsonCount(1);
    }

    public function test_CheckIfCanUpdateJobWithApi(){
        $job = Jobs::factory()->create();
        $response = $this->get(route('apiHomeJob'));

        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment(['title' => $job->title]);

        $response = $this->put(route('apiUpdateJob', $job->id),
        [
            'title' => 'This is the modified title',
            'description' => $job->description,
            'company_name' => $job->company_name,
            'job_portal' => $job->job_portal,
            'work_type' => $job->work_type,
            'work_mode' => $job->work_mode,
            'salary_range' => $job->salary_range,
            'notes' => $job->notes,
            'status' => $job->status
        ]);

        $response = $this->get(route('apiHomeJob'));
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment(['title' => 'This is the modified title']);
    }

    public function test_CheckIfCanDeleteJobWithApi(){
        Jobs::factory(2)->create();

        $response = $this->delete(route('apiDestroyJob', 1));
        $this->assertDatabaseCount('jobs', 1);

        $response = $this->get(route('apiHomeJob'));
        $response->assertStatus(200)
            ->assertJsonCount(1);
    }
}
