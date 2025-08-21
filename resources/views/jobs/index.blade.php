<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    @foreach ($jobs as $job)
        <a href="jobs/{{ $job['id'] }}" class="block mb-4">
            <div class="p-4 bg-white shadow rounded-lg hover:bg-gray-100 transition-colors">
                <h2 class="text-xl font-semibold">{{ $job['title'] }}</h2>
                <p class="text-gray-600">Company: {{ $job['company'] }}</p>
                <p class="text-gray-600">Location: {{ $job['location'] }}</p>
            </div>
        </a>
        
    @endforeach

    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>