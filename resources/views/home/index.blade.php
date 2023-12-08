

<x-app-layout>
    <div class="flex  ">
        <div class="w-full">
            <img class="object-cover w-full h-96" src="{{ asset('banner.jpg') }}" alt="First slide">
        </div>
    </div>
    <div class="py-16 bg-gray-50 overflow-hidden lg:py-24">
        <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
            <div class="relative">
                <h2 class="text-center text-4xl leading-8 font-extrabold tracking-tight text-sky-600 sm:text-6xl">
                    Encuentra tu primer trabajo</h2>
                <p class="mt-4 max-w-3xl mx-auto text-center text-xl text-gray-500">Tenemos emocionantes oportunidades
                    laborales disponibles para estudiantes y graduados de las carreras de Informática, Sistemas y
                    Economía en nuestra bolsa de trabajo. Actualmente, estamos buscando talentosos profesionales en
                    diversas áreas.</p>
            </div>
        </div>
    </div>
    <livewire:home-vacantes />
</x-app-layout>

