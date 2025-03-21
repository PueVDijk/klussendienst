<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-extrabold text-gray-900 dark:text-gray-100 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                <div class="text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl font-semibold">
                        Hello, {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}!
                    </h3>
                    <p class="mt-4 text-lg">
                        @if (Auth::user()->role == 'handyman')
                            Welcome to your dashboard, where you can manage your tasks and view your projects.
                        @elseif (Auth::user()->role == 'provider')
                            Welcome to your dashboard, where you can offer services and track your clients.
                        @elseif (Auth::user()->role == 'admin')
                            Welcome to the admin dashboard. From here, you can manage all users and oversee the platform's operations.
                        @else
                            Welcome to your dashboard.
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
