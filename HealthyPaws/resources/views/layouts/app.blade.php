<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Healthy Paws</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen relative">
        <!-- Navbar (Ensure it stays visible) -->
        <div class="relative z-20">
            @include('layouts.navigation')
        </div>

        <!-- Page Heading (Ensure it stays above the blur) -->
        @isset($header)
        <header class="bg-white shadow relative z-20">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <!-- Main Section with Blurred Background -->\
        <main class="relative z-10">
            <!-- Background Layer (Blurred but does not cover navbar) -->
            <div class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('{{ asset('background.png') }}'); filter: blur(8px); transform: scale(1.1); z-index: -1;">
            </div>

            <!-- Content Wrapper -->
            <div class="relative z-10 p-6 bg-white bg-opacity-80 rounded-lg shadow-lg max-w-7xl mx-auto mt-5">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>
