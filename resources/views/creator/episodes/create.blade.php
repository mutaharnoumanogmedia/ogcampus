<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create Episode for {{ $season->title }} (Series: {{ $series->title }})</h2>
    </x-slot>
    <form method="POST" action="{{ route('creator.series.seasons.episodes.store', [$series, $season]) }}">
        @csrf
        <div>
            <label>Title</label>
            <input type="text" name="title" required>
        </div>
        <div>
            <label>Description</label>
            <textarea name="description"></textarea>
        </div>
        <button type="submit">Create</button>
    </form>
    <a href="{{ route('creator.series.seasons.episodes.index', [$series, $season]) }}">Back to Episodes</a>
</x-app-layout>
