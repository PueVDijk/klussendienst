<x-base-layout>
    <div class="relative flex items-center justify-center h-screen bg-cover bg-center" style="background-image: url('{{ asset('/image/logo123.jpg') }}');">
        <div class="text-center text-white bg-black bg-opacity-70 p-8 rounded-lg">
            <h1 class="text-7xl font-bold mb-3" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);">Welkom bij Klussendienst</h1>
            <p class="text-xl mb-10" style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.9);">Jouw betrouwbare plek om werk te vinden als klusaanbieder voor thuisprojecten.</p>
            <a href="{{ url('/assignments') }}">
                <button class="px-3 py-3 bg-orange-500 text-white font-semibold rounded-lg shadow-md hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-75 transition transform hover:scale-105 border-2 border-transparent hover:border-orange-700">
                    Ontdek onze diensten
                </button>
            </a>
        </div>
    </div>
</x-base-layout>
