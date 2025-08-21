<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{   
    // Index - View All Jobs
    public function index() {
        $jobs = Job::with('employer')->latest()->simplePaginate(10);

        return view('jobs.index', [
            'jobs' => $jobs,
        ]);
    }

    // Create a Job
    public function create() {
        return view('jobs.create');
    }

    // Store Job in Database using Post
    public function store() {
        request()->validate([
            'title' => ['required','min:3'],
            'company' => ['required','min:3'],
            'location' => ['required','min:3'],
            'salary' => ['required','min:3',],
        ]);

        Job::create([
            'employer_id' => 1,
            'title' => request('title'),
            'company' => request('company'),
            'location' => request('location'),
            'salary' => request('salary'),

        ]);

        return redirect('/jobs');
    }

    // Show a Particular Job
    public function show(Job $job) {
        return view('jobs.show', ['job' => $job]);
    }

    // Edit a Particular Job
    public function edit(Job $job) {
        return view('jobs.edit', ['job' => $job]);
    }

    //Save Update to a Job in the Database
    public function update(Job $job) {
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
    }

    //Delete a Job in the Database
    public function destroy(Job $job) {
        $job->delete();

        return redirect('/jobs');
    }
}
