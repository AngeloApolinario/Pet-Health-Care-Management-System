<x-guest-layout>
    <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg p-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-700">Welcome Back to Healthy Paws! 🐾</h2>
            <p class="text-gray-500 mt-1">Your one-stop pet care management platform.</p>
        </div>

        <div class="mt-4 p-4 bg-blue-50 border-l-4 border-blue-500 text-blue-700 rounded-md text-center text-sm italic">
            "A HEALTHY PET IS A HAPPY PET."
        </div>

        @if (session('status'))
        <div class="bg-green-100 text-green-700 p-3 mt-4 rounded-md text-sm text-center">
            {{ session('status') }}
        </div>
        @endif

        @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 mt-4 rounded-md text-sm text-center">
            @foreach ($errors->all() as $error)
            ⚠ {{ $error }} <br>
            @endforeach
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}" id="login-form" class="mt-6">
            @csrf

            <div class="mb-4">
                <label for="email" class="block font-medium text-gray-700">Email Address</label>
                <input id="email" class="block mt-1 w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                    type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                    placeholder="Enter your registered email">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mb-4">
                <label for="password" class="block font-medium text-gray-700">Password</label>
                <input id="password" class="block mt-1 w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                    type="password" name="password" required autocomplete="current-password"
                    placeholder="Enter your password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-between mb-4">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" name="remember" class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                    <span class="text-sm text-gray-600">Remember me</span>
                </label>
                @if (Route::has('password.request'))
                <a class="text-sm text-indigo-600 hover:underline" href="{{ route('password.request') }}">
                    Forgot password?
                </a>
                @endif
            </div>

            <button type="submit"
                class="w-full bg-indigo-600 text-white py-2 rounded-md text-lg font-semibold hover:bg-indigo-700 transition flex items-center justify-center"
                id="login-button">
                <span>Log in</span>
                <span class="ml-2 hidden" id="loading-spinner">
                    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                    </svg>
                </span>
            </button>
        </form>

        <div class="text-center mt-6">
            <p class="text-gray-600 text-sm">New to Healthy Paws?
                <a href="{{ route('register') }}" class="text-indigo-600 hover:underline">Create an account</a>
            </p>
        </div>

        <footer class="mt-8 text-center text-gray-400 text-xs">
            &copy; 2025 Healthy Paws. All rights reserved. 🐶🐾
        </footer>
    </div>

    <script>
        document.getElementById('login-form').addEventListener('submit', function() {
            document.getElementById('login-button').disabled = true;
            document.getElementById('loading-spinner').classList.remove('hidden');
        });
    </script>
</x-guest-layout>