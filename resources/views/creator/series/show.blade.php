<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Series Details</h2>
    </x-slot>
    <div>
        <h3>{{ $series->title }}</h3>
        <p>{{ $series->description }}</p>
        <a href="{{ route('creator.series.seasons.index', $series) }}">View Seasons</a>
    </div>
</x-app-layout>
