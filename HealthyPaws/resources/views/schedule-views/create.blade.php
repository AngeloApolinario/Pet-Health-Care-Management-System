<x-app-layout>
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">Schedule a Vet Appointment</h2>

        <p class="text-lg text-gray-600 mb-6">
            To schedule an appointment, please select a pet from your list. If you haven't added a pet yet,
            click the button below to add one first.
        </p>

        <div class="mb-6">
            <a href="{{ route('pets.create') }}" class="bg-blue-500 text-white py-3 px-5 rounded-lg text-lg font-semibold hover:bg-blue-600">
                Add a New Pet
            </a>
        </div>

        <form action="{{ route('schedules.store') }}" method="POST" class="space-y-5 bg-gray-50 p-6 rounded-lg shadow-md">
            @csrf

            <div>
                <label for="pet_id" class="text-lg font-semibold text-gray-700 block mb-2">Select Your Pet</label>
                <select name="pet_id" id="pet_id" class="w-full border-gray-300 rounded-lg p-3 text-lg">
                    <option value="">-- Choose a Pet --</option>
                    @foreach($pets as $pet)
                    <option value="{{ $pet->id }}">{{ $pet->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="dateTime" class="text-lg font-semibold text-gray-700 block mb-2">Appointment Date & Time</label>
                <input type="datetime-local" name="dateTime" id="dateTime" requiredc
                    class="w-full border-gray-300 rounded-lg p-3 text-lg">
            </div>

            <div>
                <label for="reason" class="text-lg font-semibold text-gray-700 block mb-2">Reason for Appointment</label>
                <textarea name="reason" id="reason" required
                    class="w-full border-gray-300 rounded-lg p-3 text-lg h-32"></textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white py-3 px-6 rounded-lg text-lg font-semibold hover:bg-green-600">
                Schedule Appointment
            </button>
        </form>
    </div>
</x-app-layout>