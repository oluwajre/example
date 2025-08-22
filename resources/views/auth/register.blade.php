<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>
    
    <form method="POST" action="/register">
        @csrf
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Register</h2>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <x-form-label for="first_name">First Name</x-form-label>

                    <x-form-input id="first_name" name="first_name" placeholder="Adeoluwa" required />

                    <x-form-error name="first_name" />
                </div>

                <div class="sm:col-span-4">
                    <x-form-label for="last_name">Last Name</x-form-label>

                    <x-form-input id="last_name" name="last_name" placeholder="Ajayi" required />

                    <x-form-error name="last_name" />
                </div>

                <div class="sm:col-span-4">
                    <x-form-label for="email">Email</x-form-label>

                    <x-form-input type="email" id="email" name="email" placeholder="creditswitch@gmail.com" required />

                    <x-form-error name="email" />
                </div>

                <div class="sm:col-span-4">
                    <x-form-label for="password">Password</x-form-label>

                    <x-form-input type="password" id="password" name="password" required />

                    <x-form-error name="password" />
                </div>

                <div class="sm:col-span-4">
                    <x-form-label for="password_confirmation">Confirm Password</x-form-label>

                    <x-form-input type="password" id="password_confirmation" name="password_confirmation" required />

                    <x-form-error name="password_confirmation" />
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold rounded-md px-3 py-2 text-gray-900 border border-gray-900 hover:bg-gray-900 hover:text-white cursor-pointer">Cancel</button>
            <x-form-button>Register</x-form-button>
        </div>
    </form>

</x-layout>