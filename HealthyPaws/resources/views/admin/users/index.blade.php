@extends('layouts.admin')

@section('content')
<h2 class="text-2xl font-bold mb-4">Manage Users</h2>
<!-- Search Form -->
<form method="GET" action="{{ route('users.index') }}" class="mb-4 mt-4">
    <input type="text" name="search" placeholder="Search users..." value="{{ request('search') }}"
        class="px-4 py-2 border rounded-lg">
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Search</button>
</form>
<a href="{{ route('users.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add New User</a>



<table class="mt-4 w-full border-collapse border">
    <thead>
        <tr class="bg-gray-200">
            <th class="p-2 border">Name</th>
            <th class="p-2 border">Email</th>
            <th class="p-2 border">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td class="p-2 border">{{ $user->name }}</td>
            <td class="p-2 border">{{ $user->email }}</td>
            <td class="p-2 border">
                <a href="{{ route('users.edit', $user) }}" class="text-blue-500">Edit</a> |
                <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection