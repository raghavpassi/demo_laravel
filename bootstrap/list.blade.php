<x-app-layout>
    <x-slot name="header" class="text-gray-800 dark:text-gray-200">
        Notes List
    </x-slot>

    <table class="text-gray-800 dark:text-gray-200">
        <thead>
            <th>Sr. No.</th>
            <th>Title</th>
        </thead>
        <tbody>
            @foreach($notes as $i => $note)
                <tr onclick="window.location.href = '/notes/{{$note->id}}'">
                    <td>{{$i + 1}}</td>
                    <td>{{$note->title}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>