<x-app-layout>
    <div class="max-w-lg mx-auto mt-10 bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold text-gray-700 mb-4">Edit Appointment</h1>

        <form action="{{ route('schedules.update', $schedule) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="dateTime" class="block text-gray-600 font-medium">Date & Time:</label>
                <input type="datetime-local" name="dateTime" id="dateTime" value="{{ $schedule->dateTime }}" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 outline-none" required>
            </div>

            <div class="mb-4">
                <label for="reason" class="block text-gray-600 font-medium">Reason:</label>
                <textarea name="reason" id="reason" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 outline-none" required>{{ $schedule->reason }}</textarea>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">
                Update
            </button>
        </form>
    </div>
</x-app-layout>