<x-base-layout>
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">{{ $user->firstname }} {{ $user->lastname }}</h1>
        <div class="relative overflow-x-auto shadow-lg rounded-xl bg-white dark:bg-gray-800">
            <table class="w-full text-sm text-left text-gray-700 dark:text-gray-300">
                <thead class="text-xs font-semibold uppercase bg-orange-100 dark:bg-orange-700 dark:text-gray-300">
                    <tr>
                        <th class="px-6 py-4">First Name</th>
                        <th class="px-6 py-4">Last Name</th>
                        <th class="px-6 py-4">Email</th>
                        <th class="px-6 py-4">Phone Number</th>
                        <th class="px-6 py-4">Address</th>
                        <th class="px-6 py-4">Role</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $user->firstname }}</td>
                        <td class="px-6 py-4">{{ $user->lastname }}</td>
                        <td class="px-6 py-4">{{ $user->email }}</td>
                        <td class="px-6 py-4">{{ $user->phonenumber }}</td>
                        <td class="px-6 py-4">{{ $user->street }} {{ $user->housenumber }}, {{ $user->city }} - {{ $user->postal_code }}</td>
                        <td class="px-6 py-4">{{ ucfirst($user->role) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="flex justify-center mt-8">
            <a href="{{ route('users.index') }}"
            class="px-3 py-3 bg-orange-500 text-white font-semibold rounded-lg shadow-md hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-75 transition transform hover:scale-105">
            Back to Users
            </a>
        </div>
    </div>
</x-base-layout>
