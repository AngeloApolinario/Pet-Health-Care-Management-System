<x-app-layout>
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-xl shadow-lg mt-10">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center">Edit Pet</h2>

        <form action="{{ route('pets.update', $pet) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-lg font-medium text-gray-700">Pet Name</label>
                <input type="text" name="name" value="{{ old('name', $pet->name) }}" required 
                       class="w-full mt-2 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300">
            </div>

            <div>
                <label for="breed" class="block text-lg font-medium text-gray-700">Breed</label>
                <input type="text" name="breed" value="{{ old('breed', $pet->breed) }}" 
                       class="w-full mt-2 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300">
            </div>

            <div>
                <label for="age" class="block text-lg font-medium text-gray-700">Age</label>
                <input type="number" name="age" value="{{ old('age', $pet->age) }}" 
                       class="w-full mt-2 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300">
            </div>

            <div>
                <label for="gender" class="block text-lg font-medium text-gray-700">Gender</label>
                <select name="gender" required 
                        class="w-full mt-2 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300">
                    <option value="Male" {{ $pet->gender == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ $pet->gender == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>

            <div class="flex justify-end space-x-4">
                <a href="{{ route('pets.index') }}" class="px-4 py-2 bg-gray-400 text-white rounded-lg shadow hover:bg-gray-500">
                    Cancel
                </a>
                <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow-lg hover:bg-blue-700 transition-all duration-300">
                    Update Pet
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
