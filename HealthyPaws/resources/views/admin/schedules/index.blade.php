@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4">Manage Schedules</h2>

    @if (session('success'))
    <p class="text-green-500">{{ session('success') }}</p>
    @endif

    <!-- Search Form -->
    <form method="GET" action="{{ route('admin.schedules.index') }}" class="mb-4">
        <input type="text" name="search" placeholder="Search schedules..." value="{{ request('search') }}"
            class="px-4 py-2 border rounded-lg">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Search</button>
    </form>

    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="border px-4 py-2">Pet</th>
                <th class="border px-4 py-2">Owner</th>
                <th class="border px-4 py-2">Date & Time</th>
                <th class="border px-4 py-2">Reason</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($schedules as $schedule)
            <tr>
                <td class="border px-4 py-2">{{ $schedule->pet->name ?? 'N/A' }}</td>
                <td class="border px-4 py-2">{{ $schedule->pet->user->name ?? 'N/A' }}</td>
                <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($schedule->dateTime)->format('F j, Y - g:i A') }}</td>
                <td class="border px-4 py-2">{{ $schedule->reason }}</td>
                <td class="border px-4 py-2 flex gap-2">
                    <a href="{{ route('admin.schedules.edit', $schedule) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                    <form action="{{ route('admin.schedules.destroy', $schedule) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this schedule?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Add Schedule Button -->
    <a href="{{ route('admin.schedules.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-4 inline-block">
        Add New Schedule
    </a>
</div>
@endsection