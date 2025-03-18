<x-app-layout>
    <div class="relative flex flex-col bg-white md:flex-row items-center justify-center h-screen  px-4 sm:px-6 lg:px-8 gap-40 shadow-lg">

        <div class="w-full md:w-1/2 h-96 md:h-full flex justify-center items-center animate-fade-in-left">
            <img src="{{ asset('/petpicture.png') }}" alt="Healthy Paws" class="transition-transform duration-500 hover:scale-105">
        </div>


        <div class="w-full md:w-1/2 flex flex-col items-center md:items-start text-center md:text-left px-6 animate-fade-in-right">
            <h1 class="text-5xl font-extrabold text-gray-800 sm:text-6xl">
                Healthy Paws
            </h1>
            <p class="mt-4 text-3xl sm:text-4xl text-gray-600 italic">
                "A happy pet is a healthy pet"
            </p>
            <div class="mt-6">
                <a href="#about" class="inline-block bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white text-center animate-fade-in-up">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-semibold text-gray-800">Welcome to Healthy Paws!</h2>
            <p class="mt-4 text-xl text-gray-600">
                We are dedicated to ensuring your pets live a happy and healthy life. Join us on this journey to better pet care.
            </p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 bg-gray-50 text-center animate-fade-in-up">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-4xl font-semibold text-gray-800">Our Services</h2>
            <p class="mt-4 text-xl text-gray-600">Providing the best care for your furry friends.</p>
            <div class="mt-8 flex flex-wrap justify-center gap-8">
                <div class="w-full md:w-1/3 bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-2xl font-semibold text-gray-700">Veterinary Consultations</h3>
                    <p class="mt-2 text-gray-600">Expert health advice for your pet's wellbeing.</p>
                </div>
                <div class="w-full md:w-1/3 bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-2xl font-semibold text-gray-700">Pet Grooming</h3>
                    <p class="mt-2 text-gray-600">Keeping your pet clean, happy, and healthy.</p>
                </div>
                <div class="w-full md:w-1/3 bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <h3 class="text-2xl font-semibold text-gray-700">Emergency Care</h3>
                    <p class="mt-2 text-gray-600">Immediate care when your pet needs it the most.</p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>