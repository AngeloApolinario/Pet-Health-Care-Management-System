@extends('layouts.admin')

@section('content')
<h2 class="text-2xl font-bold mb-4">Create New User</h2>

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div class="mb-4">
        <label class="block">Name:</label>
        <input type="text" name="name" class="w-full border p-2 rounded-md" required>
    </div>

    <div class="mb-4">
        <label class="block">Email:</label>
        <input type="email" name="email" class="w-full border p-2 rounded-md" required>
    </div>

    <div class="mb-4">
        <label class="block">Password:</label>
        <input type="password" name="password" class="w-full border p-2 rounded-md" required>
    </div>

    <div class="mb-4">
        <label class="block">Confirm Password:</label>
        <input type="password" name="password_confirmation" class="w-full border p-2 rounded-md" required>
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-400">Create User</button>
</form>
@endsection