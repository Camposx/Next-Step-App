<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JobsController;
use App\Http\Controllers\Api\JobTrackingController;

Route::get('/jobs' ,[JobsController::class, 'index'])->name('apihome');
Route::post('/jobs' ,[JobsController::class, 'store'])->name('apistore');
Route::delete('/jobs/{id}' ,[JobsController::class, 'destroy'])->name('apidestroy');
Route::put('/jobs/{id}' ,[JobsController::class, 'update'])->name('apiupdate');
Route::get('/jobs/{id}' ,[JobsController::class, 'show'])->name('apishow');

Route::get('/job-tracker' ,[JobTrackingController::class, 'index'])->name('apihome');
Route::post('/job-tracker' ,[JobTrackingController::class, 'store'])->name('apistore');
Route::delete('/job-tracker/{id}' ,[JobTrackingController::class, 'destroy'])->name('apidestroy');
Route::put('/job-tracker/{id}' ,[JobTrackingController::class, 'update'])->name('apiupdate');
Route::get('/job-tracker/{id}' ,[JobTrackingController::class, 'show'])->name('apishow'); 