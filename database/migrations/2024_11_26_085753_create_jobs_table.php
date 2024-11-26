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
        Schema::create('jobs', function (Blueprint $table) {
            $table->job_id();
            $table->string('title');
            $table->text('description');
            $table->string('company_name');
            $table->string('job_portal');
            $table->string('work_type');
            $table->string('work_mode');
            $table->string('salary_range')->nullable();
            $table->text('notes');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};