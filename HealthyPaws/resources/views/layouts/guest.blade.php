<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-gray-100 to-gray-200">
        <div class="flex flex-col items-center">
            <a href="/" class="flex flex-col items-center">
                <img src="{{ asset('/logo.png') }}" class="h-40 w-auto" alt="Healthy Paws Logo" />
                <h1 class="text-center text-3xl font-bold text-gray-800 mt-2">
                    Healthy<span class="text-blue-500">Paws</span>
                </h1>
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-8 px-8 py-6 bg-white shadow-lg rounded-lg transition-transform transform hover:scale-105 duration-300">
            {{ $slot }}
        </div>
    </div>
</body>


</html>