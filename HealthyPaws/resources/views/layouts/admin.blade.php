<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Admin Panel - Healthy Paws</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('logo.png') }}">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-50">

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-900 text-white min-h-screen">
            <div class="p-4 text-center text-lg font-semibold bg-blue-800">
                Admin Panel
            </div>
            <nav class="mt-4">
                <a href="{{ route('admin.dashboard') }}"
                    class="block py-2 px-4 transition {{ request()->routeIs('admin.dashboard') ? 'bg-blue-700' : '' }}">
                    Dashboard
                </a>

                <a href="{{ route('users.index') }}"
                    class="block py-2 px-4 transition {{ request()->routeIs('users.index') ? 'bg-blue-700' : '' }}">
                    Manage Users
                </a>

                <a href="{{ route('admin.pets.index') }}"
                    class="block py-2 px-4 transition {{ request()->routeIs('admin.pets.index') ? 'bg-blue-700' : '' }}">
                    Manage Pets
                </a>

                <a href="{{ route('admin.schedules.index') }}"
                    class="block py-2 px-4 transition {{ request()->routeIs('admin.schedules.index') ? 'bg-blue-700' : '' }}">
                    Appointments
                </a>

                <!-- Logout Button -->
                <form id="logout-form" class="block py-2 px-4 hover:bg-blue-700 transition"
                    action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full text-left">Logout</button>
                </form>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <header class="bg-blue-800 text-white shadow p-4 flex justify-between items-center">
                <span class="text-xl font-semibold">Admin Dashboard</span>
                <div>
                    Welcome, <span class="font-bold">{{ Auth::guard('admin')->user()->name ?? 'Admin' }}</span>
                </div>
            </header>

            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>

</body>

</html>