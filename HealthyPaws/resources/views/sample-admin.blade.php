<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Add User Button -->
                    <a href="#" class="text-blue-600 hover:underline mb-4 inline-block">
                        + Add User
                    </a>

                    <!-- Users Table -->
                    <table class="w-full mt-4 border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border px-4 py-2">Name</th>
                                <th class="border px-4 py-2">Email</th>
                                <th class="border px-4 py-2">Role</th>
                                <th class="border px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Hardcoded User Data -->
                            @foreach ([
                                ['id' => 1, 'name' => 'John Doe', 'email' => 'johndoe@example.com', 'role' => 'Admin'],
                                ['id' => 2, 'name' => 'Jane Smith', 'email' => 'janesmith@example.com', 'role' => 'User'],
                                ['id' => 3, 'name' => 'Michael Brown', 'email' => 'michaelb@example.com', 'role' => 'User']
                            ] as $user)
                                <tr>
                                    <td class="border px-4 py-2">{{ $user['name'] }}</td>
                                    <td class="border px-4 py-2">{{ $user['email'] }}</td>
                                    <td class="border px-4 py-2">{{ $user['role'] }}</td>
                                    <td class="border px-4 py-2">
                                        <!-- Edit Button -->
                                        <a href="#" class="text-blue-600 hover:underline">Edit</a>
                                        <!-- Delete Button -->
                                        <form action="#" method="POST" class="inline-block ml-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
