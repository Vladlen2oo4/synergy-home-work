<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-zinc-500 leading-tight">
            {{ __('Личный кабинет') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-neutral-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Вы смогли авторизоваться!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
