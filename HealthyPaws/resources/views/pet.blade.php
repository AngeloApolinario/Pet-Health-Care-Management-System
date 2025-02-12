<x-app-layout>
    <div class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-center text-gray-800">
                Our Pet Services
            </h1>

            <p class="mt-4 text-xl text-center text-gray-600 max-w-2xl mx-auto">
                At Healthy Paws, we offer a variety of services to keep your pets healthy and happy. Explore our services below and choose the one that suits your pet’s needs.
            </p>

            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
               
                <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-2xl transition-transform transform hover:scale-105 duration-300">
                    <img class="w-32 h-32 mx-auto" src="{{ asset('pethealth.png') }}" alt="Health Consultation">
                    <h3 class="text-xl font-semibold text-center mt-4 text-gray-800">Pet Health Consultation</h3>
                    <p class="text-center text-gray-600 mt-2">
                        Ensure your pet is in optimal health with a consultation from our expert veterinarians.
                    </p>
                    <div class="text-center mt-6">
                        <a href="/create-appointment" class="inline-block bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                            Schedule Appointment
                        </a>
                    </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-2xl transition-transform transform hover:scale-105 duration-300">
                    <img class="w-32 h-32 mx-auto" src="{{ asset('deworming.png') }}" alt="Deworming Services">
                    <h3 class="text-xl font-semibold text-center mt-4 text-gray-800">Deworming Services</h3>
                    <p class="text-center text-gray-600 mt-2">
                        Keep your pet healthy with our professional deworming services. Protect them from harmful parasites today.
                    </p>
                    <div class="text-center mt-6">
                        <a href="#deworming-info" class="inline-block bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-2xl transition-transform transform hover:scale-105 duration-300">
                    <img class="w-32 h-32 mx-auto" src="{{ asset('neutering.png') }}" alt="Neutering Procedure">
                    <h3 class="text-xl font-semibold text-center mt-4 text-gray-800">Neutering (Castration)</h3>
                    <p class="text-center text-gray-600 mt-2">
                        Neutering is a safe surgical procedure that removes a male dog's testicles to prevent reproduction and improve behavior.
                        It helps reduce aggression, roaming, and certain health risks.
                    </p>
                    <div class="text-center mt-6">
                        <a href="#neutering-info" class="inline-block bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                            Learn More
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
