<x-base-layout>
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">{{ $assignment->name }}</h1>
        <div class="relative overflow-x-auto shadow-lg rounded-xl bg-white dark:bg-gray-800">
            <table class="w-full text-sm text-left text-gray-700 dark:text-gray-300">
                <thead class="text-xs font-semibold uppercase bg-orange-100 dark:bg-orange-700 dark:text-gray-300">
                    <tr>
                        <th class="px-6 py-4">Name</th>
                        <th class="px-6 py-4">Description</th>
                        <th class="px-6 py-4">Location</th>
                        <th class="px-6 py-4">Postal Code</th>
                        <th class="px-6 py-4">Deadline</th>
                        <th class="px-6 py-4">Budget</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4">Assigned Handyman</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $assignment->name }}</td>
                        <td class="px-6 py-4">{{ $assignment->description }}</td>
                        <td class="px-6 py-4">{{ $assignment->street }} {{ $assignment->housenumber }}, {{ $assignment->city }}</td>
                        <td class="px-6 py-4">{{ $assignment->postal_code }}</td>
                        <td class="px-6 py-4">{{ $assignment->deadline }}</td>
                        <td class="px-6 py-4">{{ $assignment->budget }}</td>
                        <td class="px-6 py-4">{{ $assignment->status }}</td>
                        <td class="px-6 py-4">{{ optional($assignment->handyman)->firstname ?? 'Unassigned' }} {{ optional($assignment->handyman)->lastname ?? '' }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="flex justify-center mt-8">
            <a href="{{ route('assignments.index') }}"
                class="px-3 py-3 bg-orange-500 text-white font-semibold rounded-lg shadow-md hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-75 transition transform hover:scale-105">
                Back to Assignments
            </a>
        </div>
    </div>
</x-base-layout>