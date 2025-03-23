@extends('layouts.admin')
@section('content')
<div class="max-w-2xl mx-auto bg-white shadow-md p-6 rounded-lg">
    <h2 class="text-2xl font-bold mb-4">Edit Medical Record for {{ $pet->name }}</h2>

    <form action="{{ route('admin.pets.medical_records.update', [$pet, $medicalRecord]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700">Date</label>
            <input type="date" name="date" value="{{ $medicalRecord->date }}" class="w-full px-4 py-2 border rounded-md" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Veterinarian</label>
            <input type="text" name="vet_name" value="{{ $medicalRecord->vet_name }}" class="w-full px-4 py-2 border rounded-md" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Diagnosis</label>
            <textarea name="diagnosis" class="w-full px-4 py-2 border rounded-md" required>{{ $medicalRecord->diagnosis }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Treatment</label>
            <textarea name="treatment" class="w-full px-4 py-2 border rounded-md">{{ $medicalRecord->treatment }}</textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Update</button>
        <a href="{{ route('admin.pets.medical_records.index', $pet) }}" class="ml-4 text-gray-600">Cancel</a>
    </form>
</div>
@endsection