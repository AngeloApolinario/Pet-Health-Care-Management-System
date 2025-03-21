<x-guest-layout>
    <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-2xl font-bold text-gray-700 text-center">Welcome Back!</h2>
        <p class="text-gray-500 text-center mb-4">Log in to your account</p>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Social Login (Links Not Active Yet) -->
        <div class="mb-4">
            <p class="text-center text-gray-600 mb-2">Login with:</p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="flex items-center px-4 py-2 bg-red-500 text-white rounded-md shadow-md hover:bg-red-600 transition">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.494 12.276c0-.811-.072-1.592-.204-2.344H12v4.439h6.539c-.301 1.609-1.192 2.968-2.539 3.892v3.24h4.08c2.391-2.203 3.777-5.448 3.777-9.227z"></path>
                    </svg>
                    Google
                </a>

                <a href="#" class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-md shadow-md hover:bg-blue-700 transition">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 12a10 10 0 10-11.3 9.9v-7h-2.7v-2.9h2.7V9.1c0-2.6 1.6-4.1 3.9-4.1 1.1 0 2.2.2 2.2.2v2.4h-1.3c-1.3 0-1.7.8-1.7 1.6v1.9h2.9l-.5 2.9h-2.4v7c4.4-.7 7.8-4.5 7.8-9z"></path>
                    </svg>
                    Facebook
                </a


                    </div>
            </div>

            <!-- Divider -->
            <div class="relative my-6">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-white text-gray-500">Or login with email</span>
                </div>
            </div>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mb-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!-- Submit Button & Forgot Password -->
                <div class="flex justify-between items-center">
                    @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif

                    <x-primary-button class="px-6 py-2">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>

            <!-- Don't Have an Account? -->
            <div class="text-center mt-6">
                <p class="text-gray-600 text-sm">Don't have an account?
                    <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Sign up</a>
                </p>
            </div>
        </div>
</x-guest-layout>