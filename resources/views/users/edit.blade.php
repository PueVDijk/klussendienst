<x-base-layout>
    <div class="container mx-auto p-8">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg max-w-lg mx-auto">
            <h1 class="text-2xl font-extrabold text-gray-900 dark:text-gray-100 mb-6">Edit User</h1>

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

            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="firstname" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">First Name:</label>
                    <input type="text" id="firstname" name="firstname" value="{{ old('firstname', $user->firstname) }}" required
                        class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                </div>

                <div class="mb-4">
                    <label for="lastname" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Last Name:</label>
                    <input type="text" id="lastname" name="lastname" value="{{ old('lastname', $user->lastname) }}" required
                        class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Email:</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required
                        class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                </div>

                <div class="mb-4">
                    <label for="phonenumber" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Phone Number:</label>
                    <input type="text" id="phonenumber" name="phonenumber" value="{{ old('phonenumber', $user->phonenumber) }}" required
                        class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                </div>

                <div class="mb-4">
                    <label for="street" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Street:</label>
                    <input type="text" id="street" name="street" value="{{ old('street', $user->street) }}" required
                        class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                </div>

                <div class="mb-4">
                    <label for="housenumber" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">House Number:</label>
                    <input type="text" id="housenumber" name="housenumber" value="{{ old('housenumber', $user->housenumber) }}" required
                        class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                </div>

                <div class="mb-4">
                    <label for="postal_code" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Postal Code:</label>
                    <input type="text" id="postal_code" name="postal_code" value="{{ old('postal_code', $user->postal_code) }}" required
                        class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                </div>

                <div class="mb-4">
                    <label for="city" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">City:</label>
                    <input type="text" id="city" name="city" value="{{ old('city', $user->city) }}" required
                        class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Password (leave blank to keep current):</label>
                    <input type="password" id="password" name="password"
                        class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                </div>

                <div class="mb-4">
                    <label for="role" class="block text-gray-900 dark:text-gray-100 font-semibold mb-2">Role:</label>
                    <select id="role" name="role" required
                        class="w-full p-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                        <option value="handyman" {{ old('role', $user->role) == 'handyman' ? 'selected' : '' }}>Handyman</option>
                        <option value="provider" {{ old('role', $user->role) == 'provider' ? 'selected' : '' }}>Provider</option>
                        <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                </div>

                <button type="submit"
                    class="w-full py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 dark:bg-blue-700 dark:hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Save Changes
                </button>
            </form>
        </div>
    </div>
</x-base-layout>
