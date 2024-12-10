<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;

Route::get('/', [JobsController::class, "index"])->name("home") ;
Route::get('/jobs/{id}', [JobsController::class, 'show'])->name('showJobDetail');
