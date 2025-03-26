@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4">Manage Pets</h2>
    <form method="GET" action="{{ route('admin.pets.index') }}" class="mb-4">
        <input type="text" name="search" placeholder="Search pets..." value="{{ request('search') }}"
            class="px-4 py-2 border rounded-lg">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Search</button>
    </form>

    <a href="{{ route('admin.pets.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md mb-4 inline-block">
        Add New Pet
    </a>

    <table class="w-full bg-white border border-gray-200 rounded-lg mt-4">
        <thead>
            <tr class="bg-blue-100">
                <th class="py-3 px-4 border-b">Name</th>
                <th class="py-3 px-4 border-b">Breed</th>
                <th class="py-3 px-4 border-b">Age</th>
                <th class="py-3 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pets as $pet)
            <tr>
                <td class="py-3 px-4">{{ $pet->name }}</td>
                <td class="py-3 px-4">{{ $pet->breed }}</td>
                <td class="py-3 px-4">{{ $pet->age }}</td>
                <td class="py-3 px-4 flex space-x-2 justify-center">
                    <a href="{{ route('admin.pets.edit', $pet->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-md">
                        Edit
                    </a>


                    <a href="{{ route('admin.pets.medical_records.create', $pet) }}" class="bg-green-500 text-white px-3 py-1 rounded-md">
                        Add Medical Record
                    </a>
                    <a href="{{ route('admin.pets.medical_records.index', $pet) }}" class="bg-blue-500 text-white px-3 py-1 rounded-md">
                        View Medical History
                    </a>



                    <form action="{{ route('admin.pets.destroy', $pet->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection