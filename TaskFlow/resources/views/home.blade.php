<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Accueil
        </h2>
    </x-slot>

    <!-- Hero -->
    <div class="text-center py-12">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white">
            Organisez vos tâches facilement avec TaskFlow
        </h1>

        <p class="mt-4 text-gray-600 dark:text-gray-300 text-lg">
            Votre espace personnel pour gérer votre productivité
        </p>

        <div class="mt-6 flex justify-center gap-4">
            <a href="/register"
               class="px-5 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition">
                S’inscrire
            </a>

            <a href="/login"
               class="px-5 py-3 border border-gray-400 dark:border-gray-600 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                Se connecter
            </a>
        </div>
    </div>

    <!-- Présentation -->
    <div class="max-w-6xl mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">

        <div class="p-6 bg-white dark:bg-gray-800 rounded-xl shadow">
            <div class="text-4xl mb-3">📋</div>
            <h5 class="font-semibold text-lg">Gestion des tâches</h5>
            <p class="text-gray-600 dark:text-gray-300 mt-2">
                Créez, modifiez et supprimez vos tâches facilement.
            </p>
        </div>

        <div class="p-6 bg-white dark:bg-gray-800 rounded-xl shadow">
            <div class="text-4xl mb-3">📊</div>
            <h5 class="font-semibold text-lg">Suivi de progression</h5>
            <p class="text-gray-600 dark:text-gray-300 mt-2">
                Visualisez votre avancement en temps réel.
            </p>
        </div>

        <div class="p-6 bg-white dark:bg-gray-800 rounded-xl shadow">
            <div class="text-4xl mb-3">🗂️</div>
            <h5 class="font-semibold text-lg">Catégorisation</h5>
            <p class="text-gray-600 dark:text-gray-300 mt-2">
                Organisez vos tâches par catégories.
            </p>
        </div>

    </div>

    <!-- Équipe -->
    <div class="max-w-6xl mx-auto px-4 py-10">
        <h2 class="text-center text-2xl font-bold mb-8 text-gray-800 dark:text-white">
            Notre équipe
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

            <div class="bg-white dark:bg-gray-800 rounded-xl shadow overflow-hidden text-center">
                <img src="https://via.placeholder.com/300"
                     class="w-full h-40 object-cover">
                <div class="p-4">
                    <h5 class="font-semibold">Nom Prénom</h5>
                    <p class="text-gray-500 dark:text-gray-300 text-sm">Frontend Dev</p>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>