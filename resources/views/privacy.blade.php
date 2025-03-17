<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Privacy Policy</title>
</head>

<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Privacy Policy</h1>
        <p class="mb-4">At Klussendienst, we are committed to protecting your privacy and ensuring that your personal
            information is handled in a safe and responsible manner. This Privacy Policy outlines how we collect, use,
            and protect your information.</p>

        <!-- Chapter 1 -->
        <div class="mb-4">
            <button
                class="w-full text-left bg-gray-200 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-gray-400"
                onclick="toggleDropdown('chapter1')">
                1. Information We Collect
            </button>
            <div id="chapter1" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                <p>We collect the following types of information when you use our platform:</p>
                <ul class="list-disc pl-10">
                    <li><strong>Personal Information:</strong> This includes your name, email address, phone number,
                        address, and other details you provide during registration or profile updates.</li>
                    <li><strong>Usage Data:</strong> Information about how you use our platform, such as pages visited,
                        actions taken, and interactions with other users.</li>
                </ul>
            </div>
        </div>

        <!-- Chapter 2 -->
        <div class="mb-4">
            <button
                class="w-full text-left bg-gray-200 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-gray-400"
                onclick="toggleDropdown('chapter2')">
                2. How We Use Your Information
            </button>
            <div id="chapter2" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                <p>Your information is used for the following purposes:</p>
                <ul class="list-disc pl-10">
                    <li>To provide and improve our services.</li>
                    <li>To communicate with you regarding your account, assignments, or updates.</li>
                    <li>To ensure the security and integrity of our platform.</li>
                </ul>
            </div>
        </div>

        <!-- Chapter 3 -->
        <div class="mb-4">
            <button
                class="w-full text-left bg-gray-200 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-gray-400"
                onclick="toggleDropdown('chapter3')">
                3. What Other Users Can See
            </button>
            <div id="chapter3" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                <p>When you use our platform, certain information may be visible to other users:</p>
                <ul class="list-disc pl-10">
                    <li><strong>Public Information:</strong> Your name, role (e.g., handyman or provider), and city may
                        be visible to other users to facilitate communication and collaboration.</li>
                    <li><strong>Private Information:</strong> Your email address, phone number, and full address will
                        only be shared with other users when necessary for completing assignments or as required by the
                        platform's functionality.</li>
                </ul>
            </div>
        </div>

        <!-- Chapter 4 -->
        <div class="mb-4">
            <button
                class="w-full text-left bg-gray-200 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-gray-400"
                onclick="toggleDropdown('chapter4')">
                4. How We Protect Your Information
            </button>
            <div id="chapter4" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                <p>We implement industry-standard security measures to protect your personal information from
                    unauthorized access, disclosure, or misuse. However, no system is completely secure, and we cannot
                    guarantee the absolute security of your data.</p>
            </div>
        </div>

        <!-- Chapter 5 -->
        <div class="mb-4">
            <button
                class="w-full text-left bg-gray-200 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-gray-400"
                onclick="toggleDropdown('chapter5')">
                5. Your Rights
            </button>
            <div id="chapter5" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                <p>You have the right to:</p>
                <ul class="list-disc pl-10">
                    <li>Access and update your personal information through your profile settings.</li>
                    <li>Request the deletion of your account and associated data.</li>
                    <li>Contact us with any questions or concerns about your privacy.</li>
                </ul>
            </div>
        </div>

        <!-- Chapter 6 -->
        <div class="mb-4">
            <button
                class="w-full text-left bg-gray-200 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-gray-400"
                onclick="toggleDropdown('chapter6')">
                6. Changes to This Privacy Policy
            </button>
            <div id="chapter6" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page, and we
                    encourage you to review it periodically.</p>
            </div>
        </div>

        <!-- Chapter 7 -->
        <div class="mb-4">
            <button
                class="w-full text-left bg-gray-200 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-gray-400"
                onclick="toggleDropdown('chapter7')">
                7. Contact Us
            </button>
            <div id="chapter7" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                <p>If you have any questions about this Privacy Policy or how your information is handled, please
                    contact us at <strong>support@klussendienst.com</strong>.</p>
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
