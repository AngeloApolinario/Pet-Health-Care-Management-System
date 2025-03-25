<x-app-layout>
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-xl shadow-lg mt-10">
        <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center">Edit Pet</h2>
        <p class="text-gray-600 mb-6 text-center">Update the details of your pet below. Make sure to fill in all the required fields.</p>

        <form action="{{ route('pets.update', $pet) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-lg font-medium text-gray-700">Pet Name</label>
                <input type="text" name="name" value="{{ old('name', $pet->name) }}" required
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300"
                    placeholder="Enter your pet's name">
                @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="breed" class="block text-lg font-medium text-gray-700">Breed</label>
                <input type="text" name="breed" value="{{ old('breed', $pet->breed) }}"
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300"
                    placeholder="Enter your pet's breed">
                @error('breed')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="age" class="block text-lg font-medium text-gray-700">Age</label>
                <input type="number" name="age" value="{{ old('age', $pet->age) }}"
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300"
                    placeholder="Enter your pet's age">
                @error('age')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="gender" class="block text-lg font-medium text-gray-700">Gender</label>
                <select name="gender" required
                    class="w-full mt-2 p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-300">
                    <option value="Male" {{ $pet->gender == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ $pet->gender == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
                @error('gender')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    Update Pet
                </button>
            </div>
        </form>
    </div>
</x-app-layout>