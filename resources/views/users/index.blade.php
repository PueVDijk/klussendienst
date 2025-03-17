<x-base-layout>
    <div class="container mx-auto p-8">
        <div class="relative overflow-x-auto shadow-lg rounded-xl bg-white dark:bg-gray-800">
            <h1 class="text-2xl font-bold py-5 px-4 text-gray-900 dark:text-white">Users List</h1>
            <table class="w-full text-sm text-left text-gray-700 dark:text-gray-300">
                <thead class="text-xs font-semibold uppercase bg-orange-100 dark:bg-orange-700 dark:text-gray-300">
                    <tr>
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">First Name</th>
                        <th class="px-6 py-4">Last Name</th>
                        <th class="px-6 py-4">Role</th>
                        <th class="px-6 py-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($users as $user)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                            <td class="px-6 py-4">{{ $user->id }}</td>
                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $user->firstname }}</td>
                            <td class="px-6 py-4">{{ $user->lastname }}</td>
                            <td class="px-6 py-4">{{ ucfirst($user->role) }}</td>
                            <td class="px-6 py-4 text-center">
                                <a href="/users/{{ $user->id }}" class="px-3 py-1 text-sm font-medium text-blue-600 bg-blue-100 rounded-full dark:bg-blue-600 dark:text-white hover:bg-blue-200 dark:hover:bg-blue-500">View</a>
                                <a href="/users/{{ $user->id }}/edit" class="px-3 py-1 text-sm font-medium text-green-600 bg-green-100 rounded-full dark:bg-green-600 dark:text-white hover:bg-green-200 dark:hover:bg-green-500 ml-2">Edit</a>
                                <form action="/users/{{ $user->id }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1 text-sm font-medium text-red-600 bg-red-100 rounded-full dark:bg-red-600 dark:text-white hover:bg-red-200 dark:hover:bg-red-500 ml-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="flex justify-center mt-8">
            <a href="{{ route('users.create') }}" class="px-5 py-3 bg-orange-500 text-white font-semibold rounded-lg shadow-md hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-75 transition transform hover:scale-105">Create User</a>
        </div>
    </div>
</x-base-layout>