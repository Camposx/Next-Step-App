<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs-trackings', function (Blueprint $table) {
            $table->tracking_id();
            $table->unasignedInteger('job_id');
            $table->string('step_name');
            $table->text('notes');
            $table->string('track_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs-trackings');
    }
};