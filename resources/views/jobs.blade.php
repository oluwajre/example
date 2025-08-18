<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    @foreach ($jobs as $job)
        <a href="jobs/{{ $job['id'] }}" class="block">
            <div class="p-4 bg-white shadow rounded-lg mb-4 hover:bg-gray-100 transition-colors">
                <h2 class="text-xl font-semibold">{{ $job['title'] }}</h2>
                <p class="text-gray-600">Company: {{ $job['company'] }}</p>
                <p class="text-gray-600">Location: {{ $job['location'] }}</p>
            </div>
        </a>
        
    @endforeach
    <p class="text-gray-500">Total jobs: {{ count($jobs) }}</p>
</x-layout>