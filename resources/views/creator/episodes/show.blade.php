<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Episode Details for {{ $season->title }} (Series: {{ $series->title }})</h2>
    </x-slot>
    <div>
        <h3>{{ $episode->title }}</h3>
        <p>{{ $episode->description }}</p>
    </div>
    <a href="{{ route('creator.series.seasons.episodes.index', [$series, $season]) }}">Back to Episodes</a>
</x-app-layout>
