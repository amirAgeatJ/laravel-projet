<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <!-- Bouton pour ajouter un lecteur -->
                    <a href="{{ route('lecteurs.create') }}" class="inline-block mt-4 px-6 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-700">
                        Ajouter un Lecteur
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
