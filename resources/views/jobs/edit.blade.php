<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>
    
    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Edit Job</h2>
            <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                    <div class="mt-2 flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <input 
                            id="title" 
                            type="text" 
                            name="title" 
                            placeholder="Software Engineer" 
                            class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                            value="{{ $job->title ?? old('title') }}"
                            required
                        />
                    </div>

                    @error('title')
                        <p class="mt-2 text-xs font-bold text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="sm:col-span-4">
                    <label for="company" class="block text-sm/6 font-medium text-gray-900">Company</label>
                    <div class="mt-2 flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <input 
                            id="company" 
                            type="text" 
                            name="company" 
                            placeholder="Creditswitch Ltd" 
                            class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                            value="{{ $job->company ?? old('company') }}"
                            required
                         />
                    </div>

                    @error('company')
                        <p class="mt-2 text-xs font-bold text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="sm:col-span-4">
                    <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                    <div class="mt-2 flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <input 
                            id="salary" 
                            type="text" 
                            name="salary" 
                            placeholder="$50,000"
                            class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                            value="{{ $job->salary ?? old('salary') }}"
                            required
                         />
                    </div>

                    @error('salary')
                        <p class="mt-2 text-xs font-bold text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-span-full">
                    <label for="location" class="block text-sm/6 font-medium text-gray-900">Location</label>
                    <div class="mt-2">
                        <textarea 
                            id="location" 
                            name="location" 
                            rows="3" 
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                            required
                        >{{ $job->location ?? old('location') }}</textarea>
                    </div>

                    @error('location')
                        <p class="mt-2 text-xs font-bold text-red-500">{{ $message }}</p>
                    @else
                        <p class="mt-2 text-sm/6 text-gray-600">Write the location of the Company.</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div>
                <button form="delete-form" class="rounded-md bg-red-700 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-700 cursor-pointer">Delete</button>
            </div>

            <div class="flex items-center justify-between gap-x-6">
                <a href="/jobs" class="text-sm inline-flex font-semibold rounded-md px-3 py-2 text-gray-900 border border-gray-900 hover:bg-gray-900 hover:text-white cursor-pointer">Cancel</a>
                <div>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer">Update</button>
                </div>
            </div>
        </div>
    </form>

    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" hidden>
        @csrf
        @method('DELETE')
    </form>
</x-layout>