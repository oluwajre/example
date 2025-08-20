<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

use App\Models\Job;

//Home 
Route::get('/', function () {
    return view('home');
});

// Index - View All Jobs
Route::get('/jobs', [JobController::class, 'index']);

// Create a Job
Route::get('/jobs/create', function () {

});

// Store Job in Database using Post
Route::post('/jobs', function () {

});

// Show a Particular Job
Route::get('/jobs/{job}', function (Job $job) {

});

// Edit a Particular Job
Route::get('/jobs/{job}/edit', function ($job) {

    return view('jobs.edit', ['job' => $job]);
});

//Save Update to a Job in the Database
Route::patch('/jobs/{job}', function (Job $job) {
    request()->validate([
        'title' => ['required','min:3'],
        'company' => ['required','min:3'],
        'location' => ['required','min:3'],
        'salary' => ['required','min:3',],
    ]);


    $job->update([
        'title'=> request('title'),
        'company' => request('company'),
        'location' => request('location'),
        'salary' => request('salary'),
    ]);

    return redirect("/jobs/{$job->id}");
});


//Delete a Job in the Database
Route::delete('/jobs/{job}', function (Job $job) {
    
    $job->delete();

    return redirect('/jobs');
});



//Contact Page
Route::get('/contact', function () {
    return view('contact');
});
