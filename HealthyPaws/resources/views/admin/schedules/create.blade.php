@extends('layouts.admin')

@section('content')
<h2 class="text-2xl font-bold mb-4">Add a New Schedule</h2>

<p class="mb-4 text-gray-600">Fill in the details to schedule a pet appointment.</p>

<form action="{{ route('admin.schedules.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg">
    @csrf

    <label class="block mb-2">Pet:</label>
    <select name="pet_id" required class="w-full border px-4 py-2 rounded mb-4">
        @foreach($pets as $pet)
        <option value="{{ $pet->id }}">{{ $pet->name }} ({{ $pet->user->name }})</option>
        @endforeach
    </select>

    <label class="block mb-2">Date:</label>
    <input type="date" name="date" required class="w-full border px-4 py-2 rounded mb-4">

    <label class="block mb-2">Time:</label>
    <input type="time" name="time" required class="w-full border px-4 py-2 rounded mb-4">

    <label class="block mb-2">Status:</label>
    <select name="status" required class="w-full border px-4 py-2 rounded mb-4">
        <option value="Pending">Pending</option>
        <option value="Confirmed">Confirmed</option>
        <option value="Completed">Completed</option>
    </select>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save Schedule</button>
</form>

@endsection