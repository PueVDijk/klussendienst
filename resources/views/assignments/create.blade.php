<x-base-layout>
    <div class="bg-gray-700">
        <div class="container mx-auto p-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg max-w-lg mx-auto">
                <h1 class="text-2xl font-extrabold text-gray-900 dark:text-gray-100 mb-6">Create Assignment</h1>

                <!-- Display Errors -->
                @if ($errors->any())
                    <div class="bg-red-500 text-white p-4 mb-6 rounded-lg">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('assignments.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Title:</label>
                        <input type="text" id="name" name="name" required
                            class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Description:</label>
                        <textarea id="description" name="description" rows="3" required
                            class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white"></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="street" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Street:</label>
                        <input type="text" id="street" name="street" required
                            class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                    </div>

                    <div class="mb-4">
                        <label for="housenumber" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">House Number:</label>
                        <input type="text" id="housenumber" name="housenumber" required
                            class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                    </div>

                    <div class="mb-4">
                        <label for="postal_code" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Postal Code:</label>
                        <input type="text" id="postal_code" name="postal_code" required
                            class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                    </div>

                    <div class="mb-4">
                        <label for="city" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">City:</label>
                        <input type="text" id="city" name="city" required
                            class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                    </div>

                    <div class="mb-4">
                        <label for="deadline" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Deadline:</label>
                        <input type="date" id="deadline" name="deadline" required
                            class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                    </div>

                    <!-- Hidden Status Field -->
                    <input type="hidden" name="status" value="Open">

                    <!-- Budget -->
                    <div class="mb-4">
                        <label for="budget" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Budget (€):</label>
                        <input type="number" id="budget" name="budget" required
                            step="0.01" min="0" class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                    </div>

                    <!-- Handyman Selection (commented out for now) -->
                    {{-- 
                    <div class="mb-4">
                        <label for="handyman_id" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Handyman:</label>
                        <select id="handyman_id" name="handyman_id" required
                            class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                            @foreach ($handymen as $handyman)
                                <option value="{{ $handyman->id }}">
                                    {{ $handyman->name }}
                                </option>
                            @endforeach
                        </select>
                    </div> 
                    --}}

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Save
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-base-layout>
