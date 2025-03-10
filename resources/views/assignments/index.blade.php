<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Available Jobs</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Description</th>
                    <th class="py-2 px-4 border-b">Location</th>
                    <th class="py-2 px-4 border-b">Deadline</th>
                    <th class="py-2 px-4 border-b">Budget</th>
                    <th class="py-2 px-4 border-b">Status</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($assignments as $assignment)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $assignment->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $assignment->description }}</td>
                    <td class="py-2 px-4 border-b">{{ $assignment->street }} {{ $assignment->house_number }}, {{ $assignment->city }}</td>
                    <td class="py-2 px-4 border-b">{{ $assignment->deadline }}</td>
                    <td class="py-2 px-4 border-b">{{ $assignment->budget }}</td>
                    <td class="py-2 px-4 border-b">{{ $assignment->status }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('assignments.show', $assignment->id) }}" class="text-blue-500 hover:underline">View</a>
                        <a href="{{ route('assignments.edit', $assignment->id) }}" class="text-yellow-500 hover:underline ml-2">Edit</a>
                        <form action="{{ route('assignments.destroy', $assignment->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline ml-2">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>