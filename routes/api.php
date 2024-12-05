<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JobsController;
use App\Http\Controllers\Api\JobTrackingController;

Route::get('/jobs' ,[JobsController::class, 'index'])->name('apiHomeJob');
Route::post('/jobs' ,[JobsController::class, 'store'])->name('apiStoreJob');
Route::delete('/jobs/{id}' ,[JobsController::class, 'destroy'])->name('apiDestroyJob');
Route::put('/jobs/{id}' ,[JobsController::class, 'update'])->name('apiUpdateJob');
Route::get('/jobs/{id}' ,[JobsController::class, 'show'])->name('apiShowJob');

Route::get('/job-tracker' ,[JobTrackingController::class, 'index'])->name('apiHomeTrack');
Route::post('/job-tracker' ,[JobTrackingController::class, 'store'])->name('apiStoreTrack');
Route::delete('/job-tracker/{id}' ,[JobTrackingController::class, 'destroy'])->name('apiDestroyTrack');
Route::put('/job-tracker/{id}' ,[JobTrackingController::class, 'update'])->name('apiUpdateTrack');
Route::get('/job-tracker/{id}' ,[JobTrackingController::class, 'show'])->name('apiShowTrack'); 