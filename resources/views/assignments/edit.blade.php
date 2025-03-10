<x-base-layout>
    <div class="container mx-auto p-8">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg max-w-lg mx-auto">
            <h1 class="text-2xl font-extrabold text-gray-900 dark:text-gray-100 mb-6">Edit Assignment</h1>

            <!-- Display Errors if Any -->
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 mb-6 rounded-lg">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('assignments.update', $assignment->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Title:</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $assignment->name) }}" required
                        class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Description:</label>
                    <textarea id="description" name="description" rows="3" required
                        class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">{{ old('description', $assignment->description) }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="street" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Street:</label>
                    <input type="text" id="street" name="street" value="{{ old('street', $assignment->street) }}" required
                        class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                </div>

                <div class="mb-4">
                    <label for="housenumber" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">House Number:</label>
                    <input type="text" id="housenumber" name="housenumber" value="{{ old('housenumber', $assignment->housenumber) }}" required
                        class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                </div>

                <div class="mb-4">
                    <label for="postal_code" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Postal Code:</label>
                    <input type="text" id="postal_code" name="postal_code" value="{{ old('postal_code', $assignment->postal_code) }}" required
                        class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                </div>

                <div class="mb-4">
                    <label for="city" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">City:</label>
                    <input type="text" id="city" name="city" value="{{ old('city', $assignment->city) }}" required
                        class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                </div>

                <div class="mb-4">
                    <label for="deadline" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Deadline:</label>
                    <input type="date" id="deadline" name="deadline" value="{{ old('deadline', $assignment->deadline->format('Y-m-d')) }}" required
                        class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                </div>

                <div class="mb-4">
                    <label for="status" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Status:</label>
                    <select id="status" name="status" required
                        class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                        <option value="open" {{ old('status', $assignment->status) == 'open' ? 'selected' : '' }}>Open</option>
                        <option value="pending" {{ old('status', $assignment->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="in_progress" {{ old('status', $assignment->status) == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="completed" {{ old('status', $assignment->status) == 'completed' ? 'selected' : '' }}>Completed</option>
                        <option value="canceled" {{ old('status', $assignment->status) == 'canceled' ? 'selected' : '' }}>Canceled</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="budget" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Budget (€):</label>
                    <input type="number" id="budget" name="budget" value="{{ old('budget', $assignment->budget) }}" required
                        step="0.01" min="0" class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                </div>

                {{-- <!-- Handyman ID Field -->
                <div class="mb-4">
                    <label for="handyman_id" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Handyman:</label>
                    <select id="handyman_id" name="handyman_id" required
                        class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                        @foreach ($handymen as $handyman)
                            <option value="{{ $handyman->id }}" {{ old('handyman_id', $assignment->handyman_id) == $handyman->id ? 'selected' : '' }}>
                                {{ $handyman->name }}
                            </option>
                        @endforeach
                    </select>
                </div> --}}

                <button type="submit"
                    class="w-full py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Save
                </button>
            </form>
        </div>
    </div>
</x-base-layout>
