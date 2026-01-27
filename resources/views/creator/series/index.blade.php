<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Series List</h2>
    </x-slot>
    <a href="{{ route('creator.series.create') }}" class="btn btn-primary">Create Series</a>
    <ul>
        @foreach($series as $item)
            <li>
                <a href="{{ route('creator.series.show', $item) }}">{{ $item->title }}</a>
                <a href="{{ route('creator.series.edit', $item) }}">Edit</a>
                <form action="{{ route('creator.series.destroy', $item) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                <a href="{{ route('creator.series.seasons.index', $item) }}">Seasons</a>
            </li>
        @endforeach
    </ul>
</x-app-layout>
