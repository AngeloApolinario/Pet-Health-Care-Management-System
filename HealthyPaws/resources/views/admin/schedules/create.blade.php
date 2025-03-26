@extends('layouts.admin')

@section('content')
<h2 class="text-2xl font-bold mb-4">Add a New Schedule</h2>

<p class="mb-4 text-gray-600">Fill in the details to schedule a pet appointment.</p>

<form action="{{ route('admin.schedules.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
    @csrf

    <div>
        <label for="pet_id" class="block text-lg font-medium text-gray-700">Select Your Pet</label>
        <select name="pet_id" id="pet_id" required class="w-full border-gray-300 rounded-lg p-3 text-lg mb-4">
            <option value="">-- Choose a Pet --</option>
            @foreach($pets as $pet)
            <option value="{{ $pet->id }}">{{ $pet->name }} ({{ $pet->user->name }})</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="dateTime" class="block text-lg font-medium text-gray-700">Appointment Date & Time</label>
        <input type="datetime-local" name="dateTime" id="dateTime" required
            class="w-full border-gray-300 rounded-lg p-3 text-lg mb-4">
    </div>

    <div>
        <label for="reason" class="block text-lg font-medium text-gray-700">Reason for Appointment</label>
        <textarea name="reason" id="reason" required
            class="w-full border-gray-300 rounded-lg p-3 text-lg h-32 mb-4"></textarea>
    </div>



    <button type="submit" class="bg-blue-500 text-white py-3 px-6 rounded-lg text-lg font-semibold hover:bg-blue-600">
        Save Schedule
    </button>
</form>
@endsection