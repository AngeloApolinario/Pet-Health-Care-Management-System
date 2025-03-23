<x-guest-layout>
    <div class="">
        <!-- Logo & Title -->
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-800">Admin Login</h2>
            <p class="text-gray-500 mt-1">Sign in to manage Healthy Paws</p>
        </div>

        <!-- Display Error Message -->
        @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 mt-4 rounded-md text-sm text-center">
            @foreach ($errors->all() as $error)
            ⚠ {{ $error }} <br>
            @endforeach
        </div>
        @endif


        <!-- Login Form -->
        <form action="{{ route('admin.login') }}" method="POST" class="mt-6">
            @csrf

            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium">Email Address</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Enter your email" required>
            </div>

            <!-- Password Input -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-medium">Password</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Enter your password" required>
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="flex justify-between items-center mb-4 text-sm">
                <label class="flex items-center space-x-2">
                    <input type="checkbox" name="remember" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <span class="text-gray-600">Remember me</span>
                </label>
                <a href="#" class="text-blue-500 hover:underline">Forgot password?</a>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md text-lg font-semibold hover:bg-blue-700 transition">
                Login
            </button>
        </form>

        <!-- Help & Support -->
        <div class="text-center mt-6 text-gray-600 text-sm">
            Need help? <a href="{{ route('contact') }}" class="text-blue-500 hover:underline">Contact Support</a>
        </div>
    </div>
</x-guest-layout>