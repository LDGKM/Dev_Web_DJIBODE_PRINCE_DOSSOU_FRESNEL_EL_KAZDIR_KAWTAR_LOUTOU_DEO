<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Mes tâches
            </h2>

            <a href="/tasks/create"
               class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition">
                + Nouvelle tâche
            </a>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 px-4">

        <div class="bg-white dark:bg-gray-800 shadow rounded-xl overflow-hidden">

            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">

                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">
                            Titre
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">
                            Priorité
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">
                            Statut
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">
                            Date limite
                        </th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">
                            Actions
                        </th>
                    </tr>
                </thead>

                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">

                    @foreach($tasks as $task)
                        <tr>

                            <!-- Titre -->
                            <td class="px-6 py-4 text-gray-900 dark:text-gray-100 font-medium">
                                {{ $task->title }}
                            </td>

                            <!-- Priorité -->
                            <td class="px-6 py-4 text-gray-600 dark:text-gray-300">
                                {{ ucfirst($task->priority) }}
                            </td>

                            <!-- Statut -->
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 text-xs rounded-full
                                    {{ $task->status === 'done'
                                        ? 'bg-green-100 text-green-700'
                                        : 'bg-yellow-100 text-yellow-700' }}">
                                    {{ $task->status }}
                                </span>
                            </td>

                            <!-- Date -->
                            <td class="px-6 py-4 text-gray-600 dark:text-gray-300">
                                {{ $task->due_date }}
                            </td>

                            <!-- Actions -->
                            <td class="px-6 py-4 text-right space-x-2">

                                <a href="#"
                                   class="px-3 py-1 text-sm bg-yellow-500 hover:bg-yellow-600 text-white rounded">
                                    Edit
                                </a>

                                <a href="#"
                                   class="px-3 py-1 text-sm bg-red-500 hover:bg-red-600 text-white rounded">
                                    Delete
                                </a>

                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>

    </div>
</x-app-layout>