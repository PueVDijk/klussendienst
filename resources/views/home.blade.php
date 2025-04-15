<x-base-layout>
    <!-- Hero Section -->
    <div class="hero relative w-full h-[90vh] md:h-screen overflow-hidden">
        <img src="{{ asset('/image/Drilling.jpg') }}" alt="Drilling Image" class="w-full h-full object-cover" />
        <div
            class="absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center text-center text-white px-4">
            <h1 class="text-5xl md:text-7xl font-bold mb-8" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">
                Welcome to Klussendienst
            </h1>
            <p class="text-xl md:text-2xl max-w-2xl" style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.9);">
                Your reliable place to find work as a home project service provider.
            </p>
            <div class="mt-12">
                <a href="{{ url('/assignments') }}"
                    class="bg-orange-500 hover:bg-orange-700 text-white px-6 py-3 rounded-lg text-lg font-medium transition duration-200 shadow-lg hover:shadow-xl transform hover:scale-105">
                    Discover Our Assignments
                </a>
            </div>
        </div>
    </div>

    <!-- Additional Section -->
    <div class="bg-white text-gray-800 py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-orange-500 mb-4">Why Choose Klussendienst?</h2>
                <p class="text-xl max-w-3xl mx-auto">
                    We connect skilled professionals with clients who need reliable help for their home projects.
                </p>
            </div>

            <!-- Feature Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <h3 class="text-2xl font-bold text-orange-500 mb-4">Trusted Professionals</h3>
                    <p class="text-gray-700">
                        All our service providers are verified and reviewed to ensure quality and reliability.
                    </p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <h3 class="text-2xl font-bold text-orange-500 mb-4">Easy to Use</h3>
                    <p class="text-gray-700">
                        Our platform is designed to make finding and hiring professionals simple and hassle-free.
                    </p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <h3 class="text-2xl font-bold text-orange-500 mb-4">Wide Range of Services</h3>
                    <p class="text-gray-700">
                        From plumbing to painting, we offer a variety of services to meet your needs.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-base-layout>