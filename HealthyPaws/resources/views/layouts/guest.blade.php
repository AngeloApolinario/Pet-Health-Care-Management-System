<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Healthy Paws</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('logo.png') }}">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased relative">

    <div class="absolute inset-0 bg-cover bg-center"
        style="background-image: url('{{ asset('background.png') }}'); filter: blur(8px); transform: scale(1.1);">
    </div>


    <div class="relative min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-opacity-50">
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