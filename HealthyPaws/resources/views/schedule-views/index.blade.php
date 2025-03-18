<x-app-layout>
    <div class="max-w-4xl mx-auto mt-10 bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold text-gray-700 mb-4">My Appointments</h1>

        @if(session('success'))
        <p class="text-green-500 text-sm mb-4">{{ session('success') }}</p>
        @endif

        <div class="mb-4">
            <a href="{{ route('schedules.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">
                + Add Appointment
            </a>
        </div>

        <table class="w-full border-collapse border border-gray-300 text-left">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2">Date & Time</th>
                    <th class="border border-gray-300 px-4 py-2">Pet</th>
                    <th class="border border-gray-300 px-4 py-2">Reason</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2">{{ $appointment->dateTime }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        {{ $appointment->pet ? $appointment->pet->name : 'No pet selected' }}
                    </td>
                    <td class="border border-gray-300 px-4 py-2">{{ $appointment->reason }}</td>
                    <td class="border border-gray-300 px-4 py-2 flex space-x-2">
                        <a href="{{ route('schedules.edit', $appointment) }}" class="text-blue-500 hover:underline">
                            Reschedule/Change
                        </a>
                        <form action="{{ route('schedules.destroy', $appointment) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Cancel</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>