<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Jobs;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobsTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfCanGetAllJobsInView(){
        $this->withoutExceptionHandling();

        Jobs::factory(5)->create();
        Jobs::all();

        $response = $this->get('/');
        $response->assertStatus(200)
            ->assertViewIs('home');
    }
    public function test_CheckIfCanGetOneJobInView() {
        $this->withoutExceptionHandling();

        $job = Jobs::factory()->create();

        $response = $this->get('/jobs/' . $job->id);

        $response->assertStatus(200)
            ->assertViewIs('show')
            ->assertViewHas('jobs', $job);
    }
}
