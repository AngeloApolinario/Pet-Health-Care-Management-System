@extends('layouts.admin')

@section('content')
<h2 class="text-2xl font-bold mb-4">Edit Schedule</h2>

@if ($errors->any())
<div class="text-red-500">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('admin.schedules.update', $schedule) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
    @csrf
    @method('PUT')

    <label class="block text-gray-700">Pet:</label>
    <select name="pet_id" class="border px-4 py-2 w-full rounded">
        <option value="">Select Pet</option>
        @foreach ($pets as $pet)
        <option value="{{ $pet->id }}" {{ $schedule->pet_id == $pet->id ? 'selected' : '' }}>
            {{ $pet->name }} (Owner: {{ $pet->user->name }})
        </option>
        @endforeach
    </select>

    <label class="block text-gray-700 mt-4">Date & Time:</label>
    <input type="datetime-local" name="dateTime" value="{{ \Carbon\Carbon::parse($schedule->dateTime)->format('Y-m-d\TH:i') }}" required class="border px-4 py-2 w-full rounded">

    <label class="block text-gray-700 mt-4">Reason:</label>
    <textarea name="reason" required class="border px-4 py-2 w-full rounded">{{ $schedule->reason }}</textarea>

    <div class="mt-4 flex gap-4">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
        <a href="{{ route('admin.schedules.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancel</a>
    </div>
</form>
@endsection