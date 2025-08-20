<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index() {
        $jobs = Job::with('employer')->latest()->simplePaginate(10);

        return view('jobs.index', [
            'jobs' => $jobs,
        ]);
    }

    public function create() {
        return view('jobs.create');
    }

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

    public function show(Job $job) {
        return view('jobs.show', ['job' => $job]);
    }

    public function edit(Job $job) {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update() {

    }

    public function destroy() {

    }
}
