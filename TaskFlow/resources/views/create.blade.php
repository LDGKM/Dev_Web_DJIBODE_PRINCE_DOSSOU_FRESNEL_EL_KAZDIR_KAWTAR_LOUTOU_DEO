<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Créer une tâche
        </h2>
    </x-slot>

    <div class="max-w-3xl mx-auto py-10 px-4">

        <form method="POST" action="/tasks"
              class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow space-y-6">

            @csrf

            <!-- Titre -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                    Titre
                </label>
                <input type="text" name="title" required
                       class="mt-1 w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Description -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                    Description
                </label>
                <textarea name="description" rows="4"
                          class="mt-1 w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>

            <!-- Priorité -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                    Priorité
                </label>
                <select name="priority"
                        class="mt-1 w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-blue-500 focus:border-blue-500">
                    <option value="low">Basse</option>
                    <option value="medium">Moyenne</option>
                    <option value="high">Haute</option>
                </select>
            </div>

            <!-- Date limite -->
            <div>
                <label class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                    Date limite
                </label>
                <input type="date" name="due_date"
                       class="mt-1 w-full rounded-lg border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Button -->
            <div class="pt-2">
                <button type="submit"
                        class="px-5 py-3 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg transition">
                    ➕ Créer la tâche
                </button>
            </div>

        </form>

    </div>
</x-app-layout>