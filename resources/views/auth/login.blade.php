<x-base-layout>
    <div class="bg-gray-800 min-h-screen flex items-center justify-center p-4">
        <div class="bg-gray-900 w-[400px] p-8 rounded-lg shadow-lg">
            <h1 class="text-2xl font-extrabold text-orange-500 mb-6 text-center">{{ __('Login') }}</h1>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" class="text-gray-400" />
                    <x-text-input id="email" class="block mt-1 w-full p-2 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 bg-gray-800 text-white" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-orange-500" />
                </div>

                <!-- Password -->
                <div class="mt-4 mb-4">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-400" />
                    <x-text-input id="password" class="block mt-1 w-full p-2 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 bg-gray-800 text-white" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-orange-500" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded bg-gray-800 border-gray-700 text-orange-500 shadow-sm focus:ring-orange-500" name="remember">
                        <span class="ms-2 text-sm text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-4">
                    <!-- Forgot Password Link -->
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-400 hover:text-orange-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <!-- Log In Button -->
                    <x-primary-button class="ms-4 bg-orange-500 hover:bg-orange-600 text-white border-orange-500">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-base-layout>