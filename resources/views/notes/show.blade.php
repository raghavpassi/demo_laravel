<x-app-layout>
    <x-slot name="header">
        <div class="text-gray-800 dark:text-gray-200">
            {{$note->title}}
        </div>
    </x-slot>

    <div class="text-gray-800 dark:text-gray-200">
        {{$note->description}}
    </div>
</x-app-layout>