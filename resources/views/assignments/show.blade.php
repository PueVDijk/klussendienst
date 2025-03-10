<x-base-layout>
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-bold mb-4 text-gray-900">{{ $assignment->name }}</h1>
        <div class="relative overflow-x-auto shadow-lg rounded-xl bg-white dark:bg-gray-800">
            <table class="w-full text-sm text-left text-gray-700 dark:text-gray-300">
                <thead class="text-xs font-semibold uppercase bg-orange-100 dark:bg-orange-700 dark:text-gray-300">
                    <tr>
                        <th class="px-6 py-4">Name</th>
                        <th class="px-6 py-4">Description</th>
                        <th class="px-6 py-4">Location</th>
                        <th class="px-6 py-4">Deadline</th>
                        <th class="px-6 py-4">Budget</th>
                        <th class="px-6 py-4">Status</th>
                        <th class="px-6 py-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $assignment->name }}</td>
                        <td class="px-6 py-4">{{ $assignment->description }}</td>
                        <td class="px-6 py-4">{{ $assignment->street }} {{ $assignment->house_number }},
                            {{ $assignment->city }}</td>
                        <td class="px-6 py-4">{{ $assignment->deadline }}</td>
                        <td class="px-6 py-4">{{ $assignment->budget }}</td>
                        <td class="px-6 py-4">{{ $assignment->status }}</td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{ route('assignments.edit', $assignment->id) }}"
                                class="inline-block px-3 py-1 text-sm font-medium text-yellow-600 bg-yellow-100 rounded-full dark:bg-yellow-600 dark:text-white hover:bg-yellow-200 dark:hover:bg-yellow-500 ml-2">Edit</a>
                            <form action="{{ route('assignments.destroy', $assignment->id) }}" method="POST"
                                class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="inline-block px-3 py-1 text-sm font-medium text-red-600 bg-red-100 rounded-full dark:bg-red-600 dark:text-white hover:bg-red-200 dark:hover:bg-red-500 ml-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-base-layout>
