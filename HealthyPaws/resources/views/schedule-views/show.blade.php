<x-app-layout>
    <div class="max-w-lg mx-auto mt-10 bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold text-gray-700 mb-4">Appointment Details</h1>

        <p class="text-gray-700"><strong>Date & Time:</strong> {{ $schedule->dateTime }}</p>
        <p class="text-gray-700 mt-2"><strong>Reason:</strong> {{ $schedule->reason }}</p>

        <div class="mt-6 flex space-x-4">
            <a href="{{ route('schedules.edit', $schedule) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600 transition">
                Edit
            </a>

            <form action="{{ route('schedules.destroy', $schedule) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition">
                    Delete
                </button>
            </form>
        </div>
    </div>
</x-app-layout>