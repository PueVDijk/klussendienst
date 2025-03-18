<x-base-layout>
    <!DOCTYPE html>
    <html lang="nl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact</title>
        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    </head>

    <body class="bg-gray-100 text-gray-900">
        <div class="container mx-auto p-6">
            <h1 class="text-3xl font-bold mb-6">Contact</h1>
            <p class="mb-4">Heeft u vragen, opmerkingen of suggesties? Neem gerust contact met ons op via een van de
                onderstaande methoden. Ons team staat klaar om u te helpen!</p>

            <!-- Contactgegevens -->
            <div class="mb-4">
                <button
                    class="w-full text-left bg-orange-300 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-orange-400"
                    onclick="toggleDropdown('contactInfo')">
                    1. Contactgegevens
                </button>
                <div id="contactInfo" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                    <ul class="list-disc pl-10">
                        <li><strong>Email:</strong> <a href="mailto:klussendienst@support.com"
                                class="text-blue-600 hover:underline">klussendienst@support.com</a></li>
                        <li><strong>Telefoon:</strong> +31 6 72490543</li>
                        <li><strong>Adres:</strong> Klussendienst, Hoofdstraat 74, 1250 AL Amsterdam, Nederland</li>
                    </ul>
                </div>
            </div>

            <!-- Sociale Media -->
            <div class="mb-4">
                <button
                    class="w-full text-left bg-orange-300 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-orange-400"
                    onclick="toggleDropdown('socialMedia')">
                    2. Sociale Media
                </button>
                <div id="socialMedia" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                    <p>Blijf op de hoogte van het laatste nieuws en updates door ons te volgen op sociale media:</p>
                    <ul class="list-disc pl-10">
                        <li><a href="https://facebook.com/klussendienst" target="_blank"
                                class="text-blue-600 hover:underline">Facebook</a></li>
                        <li><a href="https://twitter.com/klussendienst" target="_blank"
                                class="text-blue-600 hover:underline">Twitter</a></li>
                        <li><a href="https://instagram.com/klussendienst" target="_blank"
                                class="text-blue-600 hover:underline">Instagram</a></li>
                    </ul>
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
