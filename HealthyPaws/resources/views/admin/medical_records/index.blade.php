@extends('layouts.admin')

@section('content')
<div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-3xl font-bold mb-4 text-gray-700">Medical Records for {{ $pet->name }}</h2>

    <p class="text-gray-600 mb-4">
        Here is the medical history for <span class="font-semibold">{{ $pet->name }}</span>. Keeping track of vet visits helps ensure proper care and treatment.
    </p>

    @if (session('success'))
    <p class="text-green-500 font-semibold">{{ session('success') }}</p>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-100 text-gray-700">
                    <th class="border px-4 py-2 text-left">Date</th>
                    <th class="border px-4 py-2 text-left">Vet</th>
                    <th class="border px-4 py-2 text-left">Diagnosis</th>
                    <th class="border px-4 py-2 text-left">Treatment</th>
                    <th class="border px-4 py-2 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($medicalRecords as $record)
                <tr class="hover:bg-gray-50">
                    <td class="border px-4 py-2">{{ $record->date }}</td>
                    <td class="border px-4 py-2">{{ $record->vet_name }}</td>
                    <td class="border px-4 py-2">{{ $record->diagnosis }}</td>
                    <td class="border px-4 py-2">
                        {{ $record->treatment ? $record->treatment : 'N/A' }}
                    </td>
                    <td class="border px-4 py-2 flex items-center gap-2 justify-center">
                        <!-- Edit Button -->
                        <a href="{{ route('admin.pets.medical_records.edit', ['pet' => $record->pet->id, 'medicalRecord' => $record->id]) }}"
                            class="bg-yellow-500 text-white px-3 py-1 rounded-md hover:bg-yellow-600 transition">
                            Edit
                        </a>

                        <!-- Delete Form -->
                        <form action="{{ route('admin.pets.medical_records.destroy', ['pet' => $record->pet->id, 'medicalRecord' => $record->id]) }}"
                            method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this record?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add Medical Record Button -->
    <div class="mt-6">
        <a href="{{ route('admin.pets.medical_records.create', ['pet' => $pet->id]) }}"
            class="bg-green-500 text-white px-6 py-2 rounded-md hover:bg-green-600 transition shadow">
            + Add Medical Record
        </a>
    </div>
</div>
@endsection