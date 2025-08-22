<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>
    <a class="mb-4 inline-block bg-blue-500 hover:bg-blue-700 text-white rounded-md px-3 py-2" href="/jobs">
        Back to Job Listings
    </a>
    <h1 class="font-bold text-2xl text-gray-900 mb-2">{{ $job['title'] }}</h1>
    <p>The Company in need is <strong>{{ $job['company'] }}</strong></p>
    <p>The Location is at: <strong>{{ $job['location'] }}</strong></p>
    <p>The Salary is <strong>{{ $job['salary'] }}/yr</strong></p>
    <a href="/contact" class="mt-4 inline-block text-blue-500 hover:underline hover:text-blue-700">For more information, please contact us directly.</a>

    @can('edit-job', $job)
        <div class="mt-5">
            <x-button href="/jobs/{{ $job->id}}/edit">Edit Job</x-button>
        </div> 
    @endcan
</x-layout>