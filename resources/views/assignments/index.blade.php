<x-base-layout>
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-bold py-5 px-4 text-gray-900 dark:text-white">Available Jobs</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($assignments as $assignment)
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-xl p-6 transition-transform duration-200 ease-in-out hover:shadow-xl">
                    <h2 class="text-xl font-bold text-gray-900 dark:text-white">{{ $assignment->name }}</h2>
                    <p class="text-gray-700 dark:text-gray-300 mt-1">{{ $assignment->description }}</p>
                    <p class="text-gray-700 dark:text-gray-300 mt-4"><strong>Location:</strong> {{ $assignment->street }} {{ $assignment->house_number }}, {{ $assignment->city }}</p>
                    <p class="text-gray-700 dark:text-gray-300 mt-1"><strong>Status:</strong> {{ $assignment->status }}</p>
                    
                    <div class="mt-4 flex justify-center space-x-4">                         <a href="{{ route('assignments.show', $assignment->id) }}" class="inline-block px-6 py-2 text-sm font-medium text-blue-600 bg-blue-100 rounded-full dark:bg-blue-600 dark:text-white hover:bg-blue-200 dark:hover:bg-blue-500">View</a>
                        <a href="{{ route('assignments.edit', $assignment->id) }}" class="inline-block px-6 py-2 text-sm font-medium text-green-600 bg-green-100 rounded-full dark:bg-green-600 dark:text-white hover:bg-green-200 dark:hover:bg-green-500 ml-2">Edit</a>
                        <form action="{{ route('assignments.destroy', $assignment->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-block px-6 py-2 text-sm font-medium text-red-600 bg-red-100 rounded-full dark:bg-red-600 dark:text-white hover:bg-red-200 dark:hover:bg-red-500 ml-2" onclick="return confirm('Are you sure you want to delete this job?');">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center mt-8">
            <a href="{{ route('assignments.create') }}" class="px-5 py-3 bg-orange-500 text-white font-semibold rounded-lg shadow-md hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-75 transition transform hover:scale-105">Create Job</a>
        </div>
    </div>
</x-base-layout>