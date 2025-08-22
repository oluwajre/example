<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    
    <form method="POST" action="/jobs">
        @csrf
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Job</h2>
            <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <x-form-label for="title">Title</x-form-label>

                    <x-form-input id="title" name="title" placeholder="Software Engineer" required />

                    <x-form-error name="title" />
                </div>

                <div class="sm:col-span-4">
                    <x-form-label for="company">Company</x-form-label>

                    <x-form-input id="company" name="company" placeholder="Creditswitch Ltd" required />

                    <x-form-error name="company" />
                </div>

                <div class="sm:col-span-4">
                    <x-form-label for="salary">Salary</x-form-label>

                    <x-form-input id="salary" name="salary" placeholder="$50,000" required />

                    <x-form-error name="salary" />
                </div>

                <div class="sm:col-span-4">
                    <x-form-label for="location">Location</x-form-label>

                    <x-form-input id="location" name="location" placeholder="" required />

                    <x-form-error name="location" />
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold rounded-md px-3 py-2 text-gray-900 border border-gray-900 hover:bg-gray-900 hover:text-white cursor-pointer">Cancel</button>
            <x-form-button>Save</x-form-button>
        </div>
    </form>

</x-layout>