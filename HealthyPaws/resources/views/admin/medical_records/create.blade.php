@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-3xl font-bold mb-4 text-gray-700">Add Medical Record for {{ $pet->name }}</h2>

    <p class="text-gray-600 mb-4">
        Please fill out the details below to record {{ $pet->name }}'s medical history. Keeping accurate records helps track past treatments and diagnoses.
    </p>

    <form action="{{ route('admin.pets.medical_records.store', $pet) }}" method="POST" class="space-y-4">
        @csrf

        <!-- Date Field -->
        <div>
            <label class="block text-gray-700 font-semibold">Date of Visit <span class="text-red-500">*</span></label>
            <input type="date" name="date" required class="w-full border px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <!-- Vet Name Field -->
        <div>
            <label class="block text-gray-700 font-semibold">Veterinarian's Name <span class="text-red-500">*</span></label>
            <input type="text" name="vet_name" required placeholder="Dr. Smith"
                class="w-full border px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <!-- Diagnosis Field -->
        <div>
            <label class="block text-gray-700 font-semibold">Diagnosis <span class="text-red-500">*</span></label>
            <textarea name="diagnosis" required placeholder="Describe the condition or illness..."
                class="w-full border px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
        </div>

        <!-- Treatment Field -->
        <div>
            <label class="block text-gray-700 font-semibold">Treatment/Medication</label>
            <textarea name="treatment" placeholder="Prescribed medication or treatments..."
                class="w-full border px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
            <p class="text-sm text-gray-500 mt-1">Optional: Mention any medications or procedures.</p>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 transition">
                Save Medical Record
            </button>
        </div>
    </form>
</div>
@endsection