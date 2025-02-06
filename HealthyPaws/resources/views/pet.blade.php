<x-layout>
    <div class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-center text-gray-800">
                Our Pet Services
            </h1>

            <p class="mt-4 text-xl text-center text-gray-600 max-w-2xl mx-auto">
                At Healthy Paws, we offer a variety of services to keep your pets healthy and happy. Explore our services below and choose the one that suits your pet’s needs.
            </p>

            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Service 1: Health Consultation -->
                <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition-all">
                    <img class="w-32 h-32 mx-auto" src="https://via.placeholder.com/150" alt="Health Consultation">
                    <h3 class="text-xl font-semibold text-center mt-4 text-gray-800">Pet Health Consultation</h3>
                    <p class="text-center text-gray-600 mt-2">
                        Ensure your pet is in optimal health with a consultation from our expert veterinarians.
                    </p>
                    <div class="text-center mt-6">
                        <a href="#schedule-appointment" class="inline-block bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                            Schedule Appointment
                        </a>
                    </div>
                </div>

                <!-- Service 2: Nutrition Advice -->
                <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition-all">
                    <img class="w-32 h-32 mx-auto" src="https://via.placeholder.com/150" alt="Nutrition Advice">
                    <h3 class="text-xl font-semibold text-center mt-4 text-gray-800">Pet Nutrition Advice</h3>
                    <p class="text-center text-gray-600 mt-2">
                        Get personalized nutrition plans for your pets to ensure they stay healthy and energetic.
                    </p>
                    <div class="text-center mt-6">
                        <a href="#nutrition-consultation" class="inline-block bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                            Get Advice
                        </a>
                    </div>
                </div>

                <!-- Service 3: Adoption Resources -->
                <div class="bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition-all">
                    <img class="w-32 h-32 mx-auto" src="https://via.placeholder.com/150" alt="Adoption Resources">
                    <h3 class="text-xl font-semibold text-center mt-4 text-gray-800">Adoption Resources</h3>
                    <p class="text-center text-gray-600 mt-2">
                        Looking to adopt a pet? We provide resources to help you find the perfect furry friend.
                    </p>
                    <div class="text-center mt-6">
                        <a href="#adoption-form" class="inline-block bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                            View Available Pets
                        </a>
                    </div>
                </div>
            </div>

            <!-- Section for Appointment Scheduling, Nutrition Consultation, and Adoption -->
            <div class="mt-20" id="schedule-appointment">
                <h2 class="text-3xl font-semibold text-center text-gray-800">Schedule Your Appointment</h2>
                <p class="text-lg text-center text-gray-600 mt-4">
                    Ready to book an appointment? Please fill out the form below to get started.
                </p>

                <!-- Appointment Form (Modal or Expanded Form) -->
                <form class="max-w-xl mx-auto mt-8 space-y-6 bg-white shadow-xl rounded-lg p-6">
                    <div class="flex items-center justify-between">
                        <label for="pet-name" class="text-gray-700 font-medium">Pet Name</label>
                        <input type="text" id="pet-name" name="pet-name" required class="w-2/3 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="flex items-center justify-between">
                        <label for="appointment-date" class="text-gray-700 font-medium">Preferred Date</label>
                        <input type="date" id="appointment-date" name="appointment-date" required class="w-2/3 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="w-full py-3 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Schedule Appointment
                        </button>
                    </div>
                </form>
            </div>

            <!-- Section for Nutrition Consultation -->
            <div class="mt-20" id="nutrition-consultation">
                <h2 class="text-3xl font-semibold text-center text-gray-800">Get Nutrition Advice</h2>
                <p class="text-lg text-center text-gray-600 mt-4">
                    Fill out the form below to get personalized nutrition advice for your pet.
                </p>

                <!-- Nutrition Consultation Form -->
                <form class="max-w-xl mx-auto mt-8 space-y-6 bg-white shadow-xl rounded-lg p-6">
                    <div class="flex items-center justify-between">
                        <label for="pet-name-nutrition" class="text-gray-700 font-medium">Pet Name</label>
                        <input type="text" id="pet-name-nutrition" name="pet-name" required class="w-2/3 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="flex items-center justify-between">
                        <label for="dietary-preferences" class="text-gray-700 font-medium">Dietary Preferences</label>
                        <textarea id="dietary-preferences" name="dietary-preferences" rows="3" required class="w-2/3 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="w-full py-3 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Submit Nutrition Plan
                        </button>
                    </div>
                </form>
            </div>

            <!-- Section for Adoption -->
            <div class="mt-20" id="adoption-form">
                <h2 class="text-3xl font-semibold text-center text-gray-800">Adopt a Pet</h2>
                <p class="text-lg text-center text-gray-600 mt-4">
                    Ready to give a pet a forever home? Check out our adoption resources and submit an adoption form.
                </p>

                <!-- Adoption Form -->
                <form class="max-w-xl mx-auto mt-8 space-y-6 bg-white shadow-xl rounded-lg p-6">
                    <div class="flex items-center justify-between">
                        <label for="adopter-name" class="text-gray-700 font-medium">Your Name</label>
                        <input type="text" id="adopter-name" name="adopter-name" required class="w-2/3 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="flex items-center justify-between">
                        <label for="adopter-email" class="text-gray-700 font-medium">Email Address</label>
                        <input type="email" id="adopter-email" name="adopter-email" required class="w-2/3 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="w-full py-3 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Submit Adoption Application
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-layout>