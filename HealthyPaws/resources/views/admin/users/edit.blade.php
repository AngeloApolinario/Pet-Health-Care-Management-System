@extends('layouts.admin')

@section('content')
<h2 class="text-2xl font-bold mb-4">Edit User</h2>

<form action="{{ route('users.update', $user) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label class="block">Name:</label>
        <input type="text" name="name" value="{{ $user->name }}" class="w-full border p-2 rounded-md" required>
    </div>

    <div class="mb-4">
        <label class="block">Email:</label>
        <input type="email" name="email" value="{{ $user->email }}" class="w-full border p-2 rounded-md" required>
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Update User</button>
</form>
@endsection