<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

//Home 
// Route::get('/', function () {
//     return view('home');
// });

Route::view('/', 'home');

// Index - View All Jobs
Route::get('/jobs', [JobController::class, 'index']);

// Create a Job
Route::get('/jobs/create', [JobController::class,'create'])->middleware('auth');

// Store Job in Database using Post
Route::post('/jobs', [JobController::class,'store']);

// Show a Particular Job
Route::get('/jobs/{job}', [JobController::class,'show']);

// Edit a Particular Job
Route::get('/jobs/{job}/edit', [JobController::class,'edit'])
    ->middleware('auth')
    ->can('edit-job', 'job');

//Save Update to a Job in the Database
Route::patch('/jobs/{job}', [JobController::class,'update']);


//Delete a Job in the Database
Route::delete('/jobs/{job}', [JobController::class,'destroy']);


//Contact Page
// Route::get('/contact', function () {
//     return view('contact');
// });

Route::view('/contact', 'contact');


//AUTH

Route::get('/register', [RegisteredUserController::class,'create']);
Route::post('/register', [RegisteredUserController::class,'store']);

Route::get('/login', [SessionController::class,'create'])->name('login');
Route::post('/login', [SessionController::class,'store']);

Route::post('/logout', [SessionController::class,'destroy']);
