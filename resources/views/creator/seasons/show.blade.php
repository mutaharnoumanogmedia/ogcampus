<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Season Details for {{ $series->title }}</h2>
    </x-slot>
    <div class="mb-4">
        <strong>ID:</strong> {{ $season->id }}<br>
        <strong>Season Number:</strong> {{ $season->season_number }}<br>
        <strong>Title:</strong> {{ $season->title }}<br>
        <strong>Slug:</strong> {{ $season->slug }}<br>
        <strong>Description:</strong> {{ $season->description }}<br>
        <strong>Status:</strong> {{ ucfirst($season->status) }}<br>
        <strong>Sort Order:</strong> {{ $season->sort_order }}<br>
        <strong>Published At:</strong> {{ $season->published_at }}<br>
        <strong>Poster:</strong>
        @if($season->poster_path)
            <img src="{{ asset($season->poster_path) }}" alt="Poster" style="max-width:120px;">
        @else
            <span>-</span>
        @endif
    </div>
    <a href="{{ route('creator.series.seasons.episodes.index', [$series, $season]) }}">View Episodes</a>
    <a href="{{ route('creator.series.seasons.index', $series) }}">Back to Seasons</a>
</x-app-layout>
