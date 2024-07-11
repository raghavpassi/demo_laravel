<x-app-layout>
    <x-slot name="header" class="text-gray-800 dark:text-gray-200">
        NoteList
    </x-slot>

    <div class="grid p-2 text-gray-800 dark:text-gray-200" style="grid-auto-flow: row; grid-gap:1rem; grid-auto-columns: 20%;">
        @foreach($notes as $i => $note)
        <div class="p-2 rounded shadow border">
            {{$note->title}}
        </div>
        @endforeach
    </div>
</x-app-layout>