@extends('layouts.admin')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-center">Add New Pet</h2>

    <form action="{{ route('pets.store') }}" method="POST" class="mt-6">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" class="w-full px-4 py-2 border rounded-md" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Species</label>
            <input type="text" name="species" class="w-full px-4 py-2 border rounded-md" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Breed</label>
            <input type="text" name="breed" class="w-full px-4 py-2 border rounded-md">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Age</label>
            <input type="number" name="age" class="w-full px-4 py-2 border rounded-md">
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-700">
            Add Pet
        </button>
    </form>
</div>
@endsection