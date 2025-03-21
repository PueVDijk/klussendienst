<x-base-layout>
    <div class="container mx-auto p-8">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg max-w-lg mx-auto">
            <h1 class="text-2xl font-extrabold text-gray-900 dark:text-gray-100 mb-6">Register</h1>

            <!-- Display Validation Errors -->
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 mb-6 rounded-lg">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- First Name -->
                <div class="mb-4">
                    <x-input-label for="firstname" :value="__('First Name')" class="text-gray-900 dark:text-gray-100 font-semibold mb-2" />
                    <x-text-input id="firstname" class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="given-name" />
                    <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                </div>

                <!-- Last Name -->
                <div class="mb-4">
                    <x-input-label for="lastname" :value="__('Last Name')" class="text-gray-900 dark:text-gray-100 font-semibold mb-2" />
                    <x-text-input id="lastname" class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white" type="text" name="lastname" :value="old('lastname')" required autocomplete="family-name" />
                    <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" class="text-gray-900 dark:text-gray-100 font-semibold mb-2" />
                    <x-text-input id="email" class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Phone Number -->
                <div class="mb-4">
                    <x-input-label for="phonenumber" :value="__('Phone Number')" class="text-gray-900 dark:text-gray-100 font-semibold mb-2" />
                    <x-text-input id="phonenumber" class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white" type="text" name="phonenumber" :value="old('phonenumber')" required autocomplete="tel" />
                    <x-input-error :messages="$errors->get('phonenumber')" class="mt-2" />
                </div>

                <!-- Street -->
                <div class="mb-4">
                    <x-input-label for="street" :value="__('Street')" class="text-gray-900 dark:text-gray-100 font-semibold mb-2" />
                    <x-text-input id="street" class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white" type="text" name="street" :value="old('street')" required autocomplete="street-address" />
                    <x-input-error :messages="$errors->get('street')" class="mt-2" />
                </div>

                <!-- House Number -->
                <div class="mb-4">
                    <x-input-label for="housenumber" :value="__('House Number')" class="text-gray-900 dark:text-gray-100 font-semibold mb-2" />
                    <x-text-input id="housenumber" class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white" type="text" name="housenumber" :value="old('housenumber')" required autocomplete="address-line2" />
                    <x-input-error :messages="$errors->get('housenumber')" class="mt-2" />
                </div>

                <!-- Postal Code -->
                <div class="mb-4">
                    <x-input-label for="postal_code" :value="__('Postal Code')" class="text-gray-900 dark:text-gray-100 font-semibold mb-2" />
                    <x-text-input id="postal_code" class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white" type="text" name="postal_code" :value="old('postal_code')" required autocomplete="postal-code" />
                    <x-input-error :messages="$errors->get('postal_code')" class="mt-2" />
                </div>

                <!-- City -->
                <div class="mb-4">
                    <x-input-label for="city" :value="__('City')" class="text-gray-900 dark:text-gray-100 font-semibold mb-2" />
                    <x-text-input id="city" class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white" type="text" name="city" :value="old('city')" required autocomplete="address-level2" />
                    <x-input-error :messages="$errors->get('city')" class="mt-2" />
                </div>

                <!-- Role -->
                <div class="mb-4">
                    <x-input-label for="role" :value="__('Role')" class="text-gray-900 dark:text-gray-100 font-semibold mb-2" />
                    <select id="role" name="role" class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white" required>
                        <option value="handyman" {{ old('role') == 'handyman' ? 'selected' : '' }}>Handyman</option>
                        <option value="provider" {{ old('role') == 'provider' ? 'selected' : '' }}>Provider</option>
                    </select>
                    <x-input-error :messages="$errors->get('role')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-900 dark:text-gray-100 font-semibold mb-2" />
                    <x-text-input id="password" class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-900 dark:text-gray-100 font-semibold mb-2" />
                    <x-text-input id="password_confirmation" class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ms-4" style="background-color: #2563eb; color: white; border-color: #2563eb;">
                        {{ __('Register') }}
                    </x-primary-button>
                      
                </div>
            </form>
        </div>
    </div>
</x-base-layout>
