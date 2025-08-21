<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

//Home 
Route::get('/', function () {
    return view('home');
});

// Index - View All Jobs
Route::get('/jobs', [JobController::class, 'index']);

// Create a Job
Route::get('/jobs/create', [JobController::class,'create']);

// Store Job in Database using Post
Route::post('/jobs', [JobController::class,'store']);

// Show a Particular Job
Route::get('/jobs/{job}', [JobController::class,'show']);

// Edit a Particular Job
Route::get('/jobs/{job}/edit', [JobController::class,'edit']);

//Save Update to a Job in the Database
Route::patch('/jobs/{job}', [JobController::class,'update']);


//Delete a Job in the Database
Route::delete('/jobs/{job}', [JobController::class,'delete']);


//Contact Page
Route::get('/contact', function () {
    return view('contact');
});
