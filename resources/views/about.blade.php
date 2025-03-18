<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Over Ons</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Over Ons</h1>

        <!-- Hoofdstuk 1 -->
        <div class="mb-4">
            <button
                class="w-full text-left bg-gray-200 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-gray-400"
                onclick="toggleDropdown('chapter1')">
                1. Welkom bij Klussendienst
            </button>
            <div id="chapter1" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                <p>Welkom bij <strong>Klussendienst</strong>, het platform dat mensen verbindt met betrouwbare klussers en dienstverleners. Ons doel is om het vinden van hulp voor uw projecten eenvoudig, snel en betrouwbaar te maken.</p>
            </div>
        </div>

        <!-- Hoofdstuk 2 -->
        <div class="mb-4">
            <button
                class="w-full text-left bg-gray-200 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-gray-400"
                onclick="toggleDropdown('chapter2')">
                2. Onze Missie
            </button>
            <div id="chapter2" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                <p>Bij Klussendienst geloven we in het creëren van een gemeenschap waar mensen elkaar kunnen helpen. Of u nu een klusser bent die zijn vaardigheden wil aanbieden of een klant die op zoek is naar betrouwbare hulp, wij zijn hier om die verbinding mogelijk te maken.</p>
            </div>
        </div>

        <!-- Hoofdstuk 3 -->
        <div class="mb-4">
            <button
                class="w-full text-left bg-gray-200 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-gray-400"
                onclick="toggleDropdown('chapter3')">
                3. Wat Wij Doen
            </button>
            <div id="chapter3" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                <p>Klussendienst biedt een gebruiksvriendelijk platform waar klanten en dienstverleners elkaar kunnen vinden. Ons platform maakt het mogelijk om:</p>
                <ul class="list-disc pl-10">
                    <li>Projecten te plaatsen en offertes te ontvangen van gekwalificeerde klussers.</li>
                    <li>Betrouwbare dienstverleners te vinden op basis van beoordelingen en ervaringen.</li>
                    <li>Direct contact op te nemen met klussers en afspraken te maken.</li>
                </ul>
            </div>
        </div>

        <!-- Hoofdstuk 4 -->
        <div class="mb-4">
            <button
                class="w-full text-left bg-gray-200 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-gray-400"
                onclick="toggleDropdown('chapter4')">
                4. Waarom Klussendienst?
            </button>
            <div id="chapter4" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                <p>Wij begrijpen dat het vinden van de juiste hulp een uitdaging kan zijn. Daarom bieden wij:</p>
                <ul class="list-disc pl-10">
                    <li><strong>Betrouwbaarheid:</strong> Alle dienstverleners op ons platform worden zorgvuldig gecontroleerd.</li>
                    <li><strong>Gemak:</strong> Een eenvoudig te gebruiken platform dat u tijd en moeite bespaart.</li>
                    <li><strong>Transparantie:</strong> Beoordelingen en feedback van andere klanten om u te helpen de beste keuze te maken.</li>
                </ul>
            </div>
        </div>

        <!-- Hoofdstuk 5 -->
        <div class="mb-4">
            <button
                class="w-full text-left bg-gray-200 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-gray-400"
                onclick="toggleDropdown('chapter5')">
                5. Ons Team
            </button>
            <div id="chapter5" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                <p>Ons team bestaat uit toegewijde professionals die zich inzetten om uw ervaring met Klussendienst zo soepel mogelijk te maken. We werken voortdurend aan het verbeteren van ons platform en het ondersteunen van onze gebruikers.</p>
            </div>
        </div>

        <!-- Hoofdstuk 6 -->
        <div class="mb-4">
            <button
                class="w-full text-left bg-gray-200 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-gray-400"
                onclick="toggleDropdown('chapter6')">
                6. Contact
            </button>
            <div id="chapter6" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                <p>Heeft u vragen, opmerkingen of suggesties? Neem gerust contact met ons op via <strong>support@klussendienst.com</strong>. We horen graag van u!</p>
            </div>
        </div>

        <!-- Hoofdstuk 7 -->
        <div class="mb-4">
            <button
                class="w-full text-left bg-gray-200 px-4 py-2 rounded-md font-semibold focus:outline-none focus:ring focus:ring-gray-400"
                onclick="toggleDropdown('chapter7')">
                7. Bedankt!
            </button>
            <div id="chapter7" class="hidden mt-2 bg-white p-4 rounded-md shadow">
                <p>Bedankt dat u voor Klussendienst kiest. Samen bouwen we aan een gemeenschap waar iedereen kan rekenen op betrouwbare hulp en ondersteuning.</p>
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