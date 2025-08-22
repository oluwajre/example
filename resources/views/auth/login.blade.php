<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>
    
    <form method="POST" action="/login">
        @csrf
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Login</h2>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
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
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold rounded-md px-3 py-2 text-gray-900 border border-gray-900 hover:bg-gray-900 hover:text-white cursor-pointer">Cancel</button>
            <x-form-button>Login</x-form-button>
        </div>
    </form>

</x-layout>