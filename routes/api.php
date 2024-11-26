<?php

use App\Http\Controllers\Api\JobsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/jobs' ,[JobsController::class, 'index'])->name('apihome');
Route::post('/jobs' ,[JobsController::class, 'store'])->name('apistore');
Route::delete('/jobs/{id}' ,[JobsController::class, 'destroy'])->name('apidestroy');
Route::put('/jobs/{id}' ,[JobsController::class, 'update'])->name('apiupdate');
Route::get('/jobs/{id}' ,[JobsController::class, 'store'])->name('apistore');
