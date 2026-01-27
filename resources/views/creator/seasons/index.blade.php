<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Seasons for {{ $series->title }}</h2>
    </x-slot>
    <a href="{{ route('creator.series.seasons.create', $series) }}">Create Season</a>
    <table class="table-auto w-full mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Number</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Status</th>
                <th>Sort</th>
                <th>Published At</th>
                <th>Poster</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($seasons as $season)
                <tr>
                    <td>{{ $season->id }}</td>
                    <td>{{ $season->season_number }}</td>
                    <td><a href="{{ route('creator.series.seasons.show', [$series, $season]) }}">{{ $season->title }}</a></td>
                    <td>{{ $season->slug }}</td>
                    <td>{{ ucfirst($season->status) }}</td>
                    <td>{{ $season->sort_order }}</td>
                    <td>{{ $season->published_at }}</td>
                    <td>
                        @if($season->poster_path)
                            <img src="{{ asset($season->poster_path) }}" alt="Poster" style="max-width:60px;">
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('creator.series.seasons.edit', [$series, $season]) }}">Edit</a> |
                        <form action="{{ route('creator.series.seasons.destroy', [$series, $season]) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" onclick="return confirm('Delete this season?')">Delete</button>
                        </form> |
                        <a href="{{ route('creator.series.seasons.episodes.index', [$series, $season]) }}">Episodes</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('creator.series.index') }}">Back to Series</a>
</x-app-layout>
