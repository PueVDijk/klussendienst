<x-base-layout>
    <div class="relative flex items-center justify-center h-screen bg-cover bg-center" style="background-image: url('{{ asset('/image/LOGOoo.jpg') }}');">
        <div class="text-center text-white bg-black bg-opacity-50 p-8 rounded-lg">
            <h1 class="text-6xl font-bold mb-4">Welkom bij Klussendienst</h1>
            <p class="text-xl mb-8">Jouw betrouwbare plek voor klusaanbieders die je helpen met je thuisprojecten.</p>
            <a href="{{ url('/assignments') }}">
                <button class="px-5 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75 transition transform hover:scale-105">
                    Ontdek onze diensten
                </button>
            </a>
        </div>
    </div>
</x-base-layout>
