@extends('layouts.admin')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-center">Edit Pet</h2>

    <form action="{{ route('admin.pets.update', $pet->id) }}" method="POST" class="mt-6">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" value="{{ $pet->name }}" class="w-full px-4 py-2 border rounded-md" required>
        </div>



        <div class="mb-4">
            <label class="block text-gray-700">Breed</label>
            <input type="text" name="breed" value="{{ $pet->breed }}" class="w-full px-4 py-2 border rounded-md">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Age</label>
            <input type="number" name="age" value="{{ $pet->age }}" class="w-full px-4 py-2 border rounded-md">
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-700">
            Update Pet
        </button>
    </form>
</div>
@endsection