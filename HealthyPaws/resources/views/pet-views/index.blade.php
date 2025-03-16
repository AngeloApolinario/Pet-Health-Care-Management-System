<x-app-layout>
    <div class="max-w-6xl mx-auto px-4 py-6">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">Pet List</h2>

        <a href="{{ route('pets.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
            + Add Pet
        </a>

        @if(session('success'))
            <div class="mt-4 p-3 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <div class="mt-6 overflow-hidden rounded-lg shadow-lg">
            <table class="w-full border-collapse bg-white rounded-lg shadow-md">
                <thead class="bg-gray-100">
                    <tr class="text-gray-700">
                        <th class="py-3 px-4 text-left">Name</th>
                        <th class="py-3 px-4 text-left">Breed</th>
                        <th class="py-3 px-4 text-left">Age</th>
                        <th class="py-3 px-4 text-left">Gender</th>
                        <th class="py-3 px-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pets as $pet)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="py-3 px-4">{{ $pet->name }}</td>
                        <td class="py-3 px-4">{{ $pet->breed }}</td>
                        <td class="py-3 px-4">{{ $pet->age }}</td>
                        <td class="py-3 px-4">{{ $pet->gender }}</td>
                        <td class="py-3 px-4 text-center">
                            <a href="{{ route('pets.edit', $pet) }}" class="text-yellow-600 hover:text-yellow-800 font-semibold mr-3">
                                ✏️ Edit
                            </a>

                            <form action="{{ route('pets.destroy', $pet) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800 font-semibold"
                                    onclick="return confirm('Are you sure you want to delete this pet?')">
                                    🗑️ Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
