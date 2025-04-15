<x-base-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>FAQ</title>
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    </head>

    <body class="bg-orange-50 text-gray-800">
        <div class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
            <div class="bg-white p-6 sm:p-8 rounded-xl shadow-lg">
                <h1 class="text-3xl sm:text-4xl font-bold text-orange-800 mb-6">Frequently Asked Questions</h1>

                <!-- Question 1 -->
                <div class="mb-6">
                    <button
                        class="w-full text-left bg-orange-600 hover:bg-orange-700 text-white px-4 py-3 rounded-xl font-semibold shadow-md transition duration-300"
                        onclick="toggleDropdown('faq1')">
                        1. What is Klussendienst?
                    </button>
                    <div id="faq1" class="hidden mt-4 bg-orange-100 p-6 rounded-xl shadow-md">
                        <p class="text-gray-700">Klussendienst is a platform that connects skilled professionals with clients who need reliable help for their home projects.</p>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="mb-6">
                    <button
                        class="w-full text-left bg-orange-600 hover:bg-orange-700 text-white px-4 py-3 rounded-xl font-semibold shadow-md transition duration-300"
                        onclick="toggleDropdown('faq2')">
                        2. How can I create an account?
                    </button>
                    <div id="faq2" class="hidden mt-4 bg-orange-100 p-6 rounded-xl shadow-md">
                        <p class="text-gray-700">You can create an account by clicking on the "Join Now" button on the homepage and filling out the registration form with your details.</p>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="mb-6">
                    <button
                        class="w-full text-left bg-orange-600 hover:bg-orange-700 text-white px-4 py-3 rounded-xl font-semibold shadow-md transition duration-300"
                        onclick="toggleDropdown('faq3')">
                        3. How do I post a job?
                    </button>
                    <div id="faq3" class="hidden mt-4 bg-orange-100 p-6 rounded-xl shadow-md">
                        <p class="text-gray-700">To post a job, log in to your account, navigate to the "Assignments" section, and click on "Create Job." Fill in the required details and submit your job posting.</p>
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="mb-6">
                    <button
                        class="w-full text-left bg-orange-600 hover:bg-orange-700 text-white px-4 py-3 rounded-xl font-semibold shadow-md transition duration-300"
                        onclick="toggleDropdown('faq4')">
                        4. How can I find a handyman?
                    </button>
                    <div id="faq4" class="hidden mt-4 bg-orange-100 p-6 rounded-xl shadow-md">
                        <p class="text-gray-700">You can browse available handymen by visiting the "Users" section and filtering by role or location. You can also assign a handyman directly to your job posting.</p>
                    </div>
                </div>

                <!-- Question 5 -->
                <div class="mb-6">
                    <button
                        class="w-full text-left bg-orange-600 hover:bg-orange-700 text-white px-4 py-3 rounded-xl font-semibold shadow-md transition duration-300"
                        onclick="toggleDropdown('faq5')">
                        5. How do I contact support?
                    </button>
                    <div id="faq5" class="hidden mt-4 bg-orange-100 p-6 rounded-xl shadow-md">
                        <p class="text-gray-700">You can contact our support team by emailing us at <strong>support@klussendienst.com</strong> or by using the contact form on the "Contact" page.</p>
                    </div>
                </div>

                <!-- Question 6 -->
                <div class="mb-6">
                    <button
                        class="w-full text-left bg-orange-600 hover:bg-orange-700 text-white px-4 py-3 rounded-xl font-semibold shadow-md transition duration-300"
                        onclick="toggleDropdown('faq6')">
                        6. How do I update my profile information?
                    </button>
                    <div id="faq6" class="hidden mt-4 bg-orange-100 p-6 rounded-xl shadow-md">
                        <p class="text-gray-700">To update your profile information, log in to your account, go to the "Profile" section, and edit your details. Don't forget to save your changes!</p>
                    </div>
                </div>

                <!-- Question 7 -->
                <div class="mb-6">
                    <button
                        class="w-full text-left bg-orange-600 hover:bg-orange-700 text-white px-4 py-3 rounded-xl font-semibold shadow-md transition duration-300"
                        onclick="toggleDropdown('faq7')">
                        7. Can I cancel a job posting?
                    </button>
                    <div id="faq7" class="hidden mt-4 bg-orange-100 p-6 rounded-xl shadow-md">
                        <p class="text-gray-700">Yes, you can cancel a job posting by navigating to the "Assignments" section, selecting the job, and clicking on the "Cancel" button.</p>
                    </div>
                </div>

                <!-- Question 8 -->
                <div class="mb-6">
                    <button
                        class="w-full text-left bg-orange-600 hover:bg-orange-700 text-white px-4 py-3 rounded-xl font-semibold shadow-md transition duration-300"
                        onclick="toggleDropdown('faq8')">
                        8. How do I leave a review for a handyman?
                    </button>
                    <div id="faq8" class="hidden mt-4 bg-orange-100 p-6 rounded-xl shadow-md">
                        <p class="text-gray-700">After a job is completed, you can leave a review by visiting the "Assignments" section, selecting the completed job, and submitting your feedback.</p>
                    </div>
                </div>

                <!-- Question 9 -->
                <div class="mb-6">
                    <button
                        class="w-full text-left bg-orange-600 hover:bg-orange-700 text-white px-4 py-3 rounded-xl font-semibold shadow-md transition duration-300"
                        onclick="toggleDropdown('faq9')">
                        9. Is my payment information secure?
                    </button>
                    <div id="faq9" class="hidden mt-4 bg-orange-100 p-6 rounded-xl shadow-md">
                        <p class="text-gray-700">Yes, we use industry-standard encryption to ensure that your payment information is secure and protected.</p>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function toggleDropdown(id) {
                const element = document.getElementById(id);
                element.classList.toggle('hidden');
            }
        </script>
    </body>

    </html>
</x-base-layout>