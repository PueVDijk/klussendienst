<x-base-layout>
    <div class="container mx-auto p-8">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg max-w-md mx-auto">
            <h1 class="text-2xl font-extrabold text-gray-900 dark:text-gray-100 mb-6 text-center">{{ __('Forgot Password') }}</h1>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-center mt-4">
                    <!-- Reset Password Button -->
                    <x-primary-button class="ms-4" style="background-color: #2563eb; color: white; border-color: #2563eb;">
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-base-layout>
