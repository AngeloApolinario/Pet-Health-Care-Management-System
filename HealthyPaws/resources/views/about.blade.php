<x-app-layout>
    <div class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px- sm:px-6 lg:px-8 shadow-lg ">
            <h1 class="text-4xl font-bold text-center text-gray-800">
                About Healthy Paws
            </h1>

            <p class="mt-4 text-xl text-center text-gray-600 max-w-2xl mx-auto">
                At Healthy Paws, we believe that a healthy pet is a happy pet. Our mission is to provide the best care, health tips, and advice to ensure your pets live long, happy, and fulfilling lives. We are dedicated to building a community where pets are loved and treated with respect and care.
            </p>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Mission Section -->
                <div class="space-y-6">
                    <h2 class="text-2xl font-semibold text-gray-800">Our Mission</h2>
                    <p class="text-lg text-gray-600">
                        Our mission is simple: to provide pet owners with the best resources, products, and services to keep their pets happy and healthy. We strive to make pet care more accessible, with expert advice and solutions for all pet-related needs.
                    </p>
                </div>

                <!-- Vision Section -->
                <div class="space-y-6">
                    <h2 class="text-2xl font-semibold text-gray-800">Our Vision</h2>
                    <p class="text-lg text-gray-600">
                        We envision a world where every pet is loved and cared for, where pet owners have access to the tools and knowledge needed to keep their pets healthy. We aim to be the go-to platform for pet care information, health solutions, and adoption resources.
                    </p>
                </div>
            </div>

            <div class="mt-20">
                <h2 class="text-3xl font-semibold text-center text-gray-800">Meet Our Team</h2>
                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                    <!-- Project Manager -->
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <img class="w-32 h-32 rounded-full mx-auto" src="{{ asset('nikus.jpg') }}" alt="Nikus Angelo">
                        <h3 class="text-xl font-semibold text-center mt-4 text-gray-800">Nikus Angelo</h3>
                        <p class="text-center text-gray-600">Project Manager</p>
                    </div>

                    <!-- Integration Manager -->
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <img class="w-32 h-32 rounded-full mx-auto" src="{{ asset('axel.jpg') }}" alt="Axel Tumpalan">
                        <h3 class="text-xl font-semibold text-center mt-4 text-gray-800">Axel Tumpalan</h3>
                        <p class="text-center text-gray-600">Integration Manager</p>
                    </div>

                    <!-- Web Architect -->
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <img class="w-32 h-32 rounded-full mx-auto" src="{{ asset('richmond.jfif') }}" alt="Richmond Villaluz">
                        <h3 class="text-xl font-semibold text-center mt-4 text-gray-800">Richmond Villaluz</h3>
                        <p class="text-center text-gray-600">Web Architect</p>
                    </div>

                    <!-- UI/UX Designer -->
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <img class="w-32 h-32 rounded-full mx-auto" src="{{ asset('venice.jfif') }}" alt="Venice Godoy">
                        <h3 class="text-xl font-semibold text-center mt-4 text-gray-800">Venice Godoy</h3>
                        <p class="text-center text-gray-600">UI/UX Designer</p>
                    </div>

                    <!-- Database Designer -->
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <img class="w-32 h-32 rounded-full mx-auto" src="{{ asset('ella.jfif') }}" alt="Elionor Oliveros">
                        <h3 class="text-xl font-semibold text-center mt-4 text-gray-800">Elionor Oliveros</h3>
                        <p class="text-center text-gray-600">Database Designer</p>
                    </div>
                </div>
            </div>

            <div class="mt-20 bg-gray-100 py-12 px-4 rounded-lg">
                <div class="max-w-7xl mx-auto text-center">
                    <h2 class="text-3xl font-semibold text-gray-800">Our Services</h2>
                    <p class="mt-4 text-lg text-gray-600">
                        We offer a variety of services to ensure your pets live their best lives. From health advice to nutritional tips, we have the resources you need.
                    </p>
                </div>

                <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                    <!-- Service 1 -->
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Pet Health Consultation</h3>
                        <p class="mt-4 text-gray-600">
                            Consult with our expert veterinarians to ensure your pet's health is in top condition.
                        </p>
                    </div>

                    <!-- Service 2 -->
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Pet Nutrition Advice</h3>
                        <p class="mt-4 text-gray-600">
                            Get personalized nutrition plans for your pets to maintain a healthy weight and lifestyle.
                        </p>
                    </div>

                    <!-- Service 3 -->
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <h3 class="text-xl font-semibold text-gray-800">Adoption Resources</h3>
                        <p class="mt-4 text-gray-600">
                            Looking to adopt? We provide resources to help you find your perfect pet.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-20 text-center py-4">
                <h2 class="text-3xl font-semibold text-gray-800">Get In Touch</h2>
                <p class="mt-4 text-lg text-gray-600">
                    Have questions? Reach out to us, and we'll be happy to assist you.
                </p>
                <a href="mailto:contact@healthypaws.com" class="mt-6 inline-block bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</x-app-layout>