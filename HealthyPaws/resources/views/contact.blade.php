<x-app-layout>
    <div class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-5xl font-extrabold text-center text-gray-900">
                Contact Us
            </h1>

            <p class="mt-6 text-lg text-center text-gray-700 max-w-3xl mx-auto">
                Have questions or feedback? We'd love to hear from you! Fill out the form below, and we'll get back to you as soon as possible.
            </p>

            <div class="mt-12 grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white shadow-lg rounded-xl p-10">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Get in Touch</h2>
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-gray-700 font-medium">Your Name</label>
                            <input id="name" type="text" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <div>
                            <label for="email" class="block text-gray-700 font-medium">Your Email</label>
                            <input id="email" type="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <div>
                            <label for="message" class="block text-gray-700 font-medium">Your Message</label>
                            <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="w-full py-3 px-6 bg-blue-600 text-white font-bold text-lg rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <div class="space-y-8">
                    <div class="bg-white shadow-lg rounded-xl p-10">
                        <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Office</h2>
                        <p class="text-lg text-gray-700">
                            Healthy Paws Veterinary Clinic<br>
                            808 Bldg. Maharlika Highway, Brgy. H. Conception, Cabanatuan City<br>
                            Pet City, PC 78901
                        </p>
                        <p class="text-lg text-gray-700 mt-4">
                            <strong>Phone:</strong> (123) 456-7890<br>
                            <strong>Email:</strong> <a href="mailto:info@healthypaws.com" class="text-blue-500 hover:text-blue-700">info@healthypaws.com</a>
                        </p>
                    </div>

                    <div class="bg-white shadow-lg rounded-xl overflow-hidden">
                        <h2 class="text-3xl font-bold text-gray-800 p-6">Find Us Here</h2>
                        <iframe class="w-full h-80" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3845.396978405863!2d120.94941407475783!3d15.463064585132047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397299b42d1cdbd%3A0x4e82ae380af1b881!2sHEALTHY%20PAWS%20VETERINARY%20CLINIC!5e0!3m2!1sen!2sph!4v1738721318741!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
