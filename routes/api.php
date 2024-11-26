<?php

use App\Http\Controllers\Api\JobsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/jobs' ,[JobsController::class, 'index'])->name('apihome');
