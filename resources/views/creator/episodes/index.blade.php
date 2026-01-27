<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Episodes for {{ $season->title }} (Series: {{ $series->title }})</h2>
    </x-slot>
    <a href="{{ route('creator.series.seasons.episodes.create', [$series, $season]) }}">Create Episode</a>
    <ul>
        @foreach($episodes as $episode)
            <li>
                <a href="{{ route('creator.series.seasons.episodes.show', [$series, $season, $episode]) }}">{{ $episode->title }}</a>
                <a href="{{ route('creator.series.seasons.episodes.edit', [$series, $season, $episode]) }}">Edit</a>
                <form action="{{ route('creator.series.seasons.episodes.destroy', [$series, $season, $episode]) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('creator.series.seasons.index', $series) }}">Back to Seasons</a>
</x-app-layout>
