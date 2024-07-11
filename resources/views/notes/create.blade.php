<x-app-layout>
    <x-slot name="header">
    <div class="text-gray-800 dark:text-gray-200">
        New Note Making
    </div>
</x-slot>


    <form method="post" action="/notes" class="text-gray-800 dark:text-gray-200">
        @csrf

        <div>
            <label>Title</label>
            <input name="title">
        </div>
        <div>
            <label>description</label>
            <textarea name="description"></textarea>
        </div>

        <button>
            Make New Note
        </button>
    </form>
    </x-app-layout>
