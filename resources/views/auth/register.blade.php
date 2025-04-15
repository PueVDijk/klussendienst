<x-base-layout>
    <div class="bg-gray-800 min-h-screen flex items-center justify-center p-4">
        <div class="bg-gray-900 w-[400px] p-8 rounded-lg shadow-lg">
            <h1 class="text-2xl font-extrabold text-orange-500 mb-6 text-center">{{ __('Register') }}</h1>

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
                    <x-input-label for="firstname" :value="__('First Name')" class="text-gray-400" />
                    <x-text-input id="firstname" class="block mt-1 w-full p-2 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 bg-gray-800 text-white" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="given-name" />
                    <x-input-error :messages="$errors->get('firstname')" class="mt-2 text-orange-500" />
                </div>

                <!-- Last Name -->
                <div class="mb-4">
                    <x-input-label for="lastname" :value="__('Last Name')" class="text-gray-400" />
                    <x-text-input id="lastname" class="block mt-1 w-full p-2 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 bg-gray-800 text-white" type="text" name="lastname" :value="old('lastname')" required autocomplete="family-name" />
                    <x-input-error :messages="$errors->get('lastname')" class="mt-2 text-orange-500" />
                </div>

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" class="text-gray-400" />
                    <x-text-input id="email" class="block mt-1 w-full p-2 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 bg-gray-800 text-white" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-orange-500" />
                </div>

                <!-- Phone Number -->
                <div class="mb-4">
                    <x-input-label for="phonenumber" :value="__('Phone Number')" class="text-gray-400" />
                    <x-text-input id="phonenumber" class="block mt-1 w-full p-2 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 bg-gray-800 text-white" type="text" name="phonenumber" :value="old('phonenumber')" required autocomplete="tel" />
                    <x-input-error :messages="$errors->get('phonenumber')" class="mt-2 text-orange-500" />
                </div>

                <!-- Street -->
                <div class="mb-4">
                    <x-input-label for="street" :value="__('Street')" class="text-gray-400" />
                    <x-text-input id="street" class="block mt-1 w-full p-2 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 bg-gray-800 text-white" type="text" name="street" :value="old('street')" required autocomplete="street-address" />
                    <x-input-error :messages="$errors->get('street')" class="mt-2 text-orange-500" />
                </div>

                <!-- House Number -->
                <div class="mb-4">
                    <x-input-label for="housenumber" :value="__('House Number')" class="text-gray-400" />
                    <x-text-input id="housenumber" class="block mt-1 w-full p-2 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 bg-gray-800 text-white" type="text" name="housenumber" :value="old('housenumber')" required autocomplete="address-line2" />
                    <x-input-error :messages="$errors->get('housenumber')" class="mt-2 text-orange-500" />
                </div>

                <!-- Postal Code -->
                <div class="mb-4">
                    <x-input-label for="postal_code" :value="__('Postal Code')" class="text-gray-400" />
                    <x-text-input id="postal_code" class="block mt-1 w-full p-2 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 bg-gray-800 text-white" type="text" name="postal_code" :value="old('postal_code')" required autocomplete="postal-code" />
                    <x-input-error :messages="$errors->get('postal_code')" class="mt-2 text-orange-500" />
                </div>

                <!-- City -->
                <div class="mb-4">
                    <x-input-label for="city" :value="__('City')" class="text-gray-400" />
                    <x-text-input id="city" class="block mt-1 w-full p-2 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 bg-gray-800 text-white" type="text" name="city" :value="old('city')" required autocomplete="address-level2" />
                    <x-input-error :messages="$errors->get('city')" class="mt-2 text-orange-500" />
                </div>

                <!-- Role -->
                <div class="mb-4">
                    <x-input-label for="role" :value="__('Role')" class="text-gray-400" />
                    <select id="role" name="role" class="block mt-1 w-full p-2 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 bg-gray-800 text-white" required>
                        <option value="handyman" {{ old('role') == 'handyman' ? 'selected' : '' }}>Handyman</option>
                        <option value="provider" {{ old('role') == 'provider' ? 'selected' : '' }}>Provider</option>
                    </select>
                    <x-input-error :messages="$errors->get('role')" class="mt-2 text-orange-500" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-400" />
                    <x-text-input id="password" class="block mt-1 w-full p-2 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 bg-gray-800 text-white" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-orange-500" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-gray-400" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full p-2 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 bg-gray-800 text-white" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-orange-500" />
                </div>

                <div class="flex items-center justify-between mt-4">
                    <a class="underline text-sm text-gray-400 hover:text-orange-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ms-4 bg-orange-500 hover:bg-orange-600 text-white border-orange-500">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-base-layout>