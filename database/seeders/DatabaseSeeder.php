<?php

namespace Database\Seeders;

use App\Models\Jobs;
use App\Models\Jobs_trackings;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Jobs::factory(10)->create();

        Jobs_trackings::factory(40)->create();

    }
}
