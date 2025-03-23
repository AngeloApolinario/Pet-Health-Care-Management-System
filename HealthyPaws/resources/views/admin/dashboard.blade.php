@extends('layouts.admin')

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

    <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <h3 class="text-lg font-semibold text-gray-600">Total Users</h3>
        <p class="text-3xl font-bold text-blue-600">{{ $totalUsers }}</p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <h3 class="text-lg font-semibold text-gray-600">Total Pets</h3>
        <p class="text-3xl font-bold text-blue-600">{{ $totalPets }}</p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <h3 class="text-lg font-semibold text-gray-600">Total Appointments</h3>
        <p class="text-3xl font-bold text-blue-600">{{ $totalAppointments }}</p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <h3 class="text-lg font-semibold text-gray-600">Appointments Today</h3>
        <p class="text-3xl font-bold text-red-500">{{ $appointmentsToday }}</p>
    </div>

</div>

<div class="bg-white p-6 rounded-lg shadow-md mt-6">
    <h2 class="text-xl font-semibold text-gray-800 mb-4">Recent Appointments</h2>
    <table class="min-w-full bg-white border border-gray-200 rounded-lg">
        <thead>
            <tr class="bg-blue-100">
                <th class="py-3 px-4 border-b">Pet Name</th>
                <th class="py-3 px-4 border-b">Owner</th>
                <th class="py-3 px-4 border-b">Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($recentAppointments as $appointment)
            <tr class="text-center border-b">
                <td class="py-3 px-4">
                    {{ $appointment->pet ? $appointment->pet->name : 'No Pet Assigned' }}
                </td>
                <td class="py-3 px-4">
                    {{ $appointment->user ? $appointment->user->name : 'Unknown Owner' }}
                </td>
                <td class="py-3 px-4">
                    {{\Carbon\Carbon::parse($appointment->dateTime)->format('M d, Y') }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection