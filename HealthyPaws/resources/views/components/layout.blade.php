<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="flex justify-evenly items-center p-4 bg-blue-400">
        <div class="flex items-center gap-2">
            <img src="{{ asset('logo.png') }}" alt="Logo" class="w-12">
            <h1 class="text-2xl "><span class="text-white">Healthy</span><span class="text-white">Paws</span> </h1>
        </div>


        <div class="flex gap-20 text-gray-800 items-center">
            <x-nav-links href="/" :active="request()->is('/')">HOME</x-nav-links>
            <x-nav-links href="/about" :active="request()->is('about')">ABOUT US</x-nav-links>
            <x-nav-links href="/pet" :active="request()->is('pet')">PETS</x-nav-links>
            <x-nav-links href="/contact" :active="request()->is('contact')">CONTACTS</x-nav-links>
        </div>


        <div class="flex gap-20">
            <button class="py-2 bg-orange-600 rounded-md px-4 text-white">SIGN IN</button>
            <button class="py-2 bg-orange-600 rounded-md px-4 text-white">SIGN UP</button>
        </div>
    </nav>
    <div class="">
        {{$slot}}
    </div>
</body>

</html>