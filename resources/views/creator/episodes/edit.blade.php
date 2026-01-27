<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Episode for {{ $season->title }} (Series: {{ $series->title }})</h2>
    </x-slot>
    <form method="POST" action="{{ route('creator.series.seasons.episodes.update', [$series, $season, $episode]) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{ $episode->title }}" required>
        </div>
        <div>
            <label>Description</label>
            <textarea name="description">{{ $episode->description }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('creator.series.seasons.episodes.index', [$series, $season]) }}">Back to Episodes</a>
</x-app-layout>
