<x-app-layout>
    <div class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-center text-gray-800">
                Our Pet Services
            </h1>

            <p class="mt-4 text-xl text-center text-gray-600 max-w-2xl mx-auto">
                At Healthy Paws, we provide top-quality pet care services to keep your furry companions happy and healthy. Explore our services below and book an appointment with ease.
            </p>

            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img class="w-32 h-32 mx-auto" src="{{ asset('pethealth.png') }}" alt="Health Consultation">
                    <h3 class="text-xl font-semibold text-center mt-4 text-gray-800">Pet Health Consultation</h3>
                    <p class="text-center text-gray-600 mt-2">
                        Ensure your pet’s well-being with a check-up from our expert veterinarians.
                    </p>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img class="w-32 h-32 mx-auto" src="{{ asset('deworming.png') }}" alt="Deworming Services">
                    <h3 class="text-xl font-semibold text-center mt-4 text-gray-800">Deworming Services</h3>
                    <p class="text-center text-gray-600 mt-2">
                        Protect your pet from harmful parasites with our professional deworming treatment.
                    </p>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-6">
                    <img class="w-32 h-32 mx-auto" src="{{ asset('neutering.png') }}" alt="Neutering Procedure">
                    <h3 class="text-xl font-semibold text-center mt-4 text-gray-800">Neutering (Castration)</h3>
                    <p class="text-center text-gray-600 mt-2">
                        A safe and effective procedure that prevents reproduction and improves pet behavior.
                    </p>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('schedules.create') }}" class="bg-blue-500 text-white text-lg font-semibold px-8 py-4 rounded-lg shadow-lg hover:bg-blue-700 transition">
                    Schedule an Appointment Now
                </a>
            </div>
        </div>
    </div>
</x-app-layout>