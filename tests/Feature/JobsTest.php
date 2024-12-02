<?php

namespace Tests\Feature;

use App\Models\Jobs;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JobsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_CheckIfCanRetrieveAllJobsInJson() {
        $job = Jobs::factory(2)->create();
        $response = $this->get(route('apiHome'));

        $response->assertStatus(200)->assertJsonCount(2);
    }
}
