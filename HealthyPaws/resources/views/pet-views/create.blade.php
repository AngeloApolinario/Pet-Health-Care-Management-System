<x-app-layout>
    <div class="max-w-lg mx-auto bg-white p-6 rounded-2xl shadow-md mt-10">
        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">Add New Pet</h2>

        <form action="{{ route('pets.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-1">Pet Name</label>
                <input type="text" name="name" class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-400 focus:outline-none" required>
            </div>

            <div>
                <label for="breed" class="block text-gray-700 font-semibold mb-1">Breed</label>
                <input type="text" name="breed" class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-400 focus:outline-none">
            </div>

            <div>
                <label for="age" class="block text-gray-700 font-semibold mb-1">Age</label>
                <input type="number" name="age" class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-400 focus:outline-none">
            </div>

            <div>
                <label for="gender" class="block text-gray-700 font-semibold mb-1">Gender</label>
                <select name="gender" class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-400 focus:outline-none" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="flex justify-center">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition-all">
                    Add Pet
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
