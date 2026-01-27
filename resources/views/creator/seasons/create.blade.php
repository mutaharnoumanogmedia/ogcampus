<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create Season for {{ $series->title }}</h2>
    </x-slot>
    <form method="POST" action="{{ route('creator.series.seasons.store', $series) }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Season Number</label>
            <input type="number" name="season_number" min="1" required>
        </div>
        <div>
            <label>Title</label>
            <input type="text" name="title">
        </div>
        <div>
            <label>Slug</label>
            <input type="text" name="slug">
        </div>
        <div>
            <label>Description</label>
            <textarea name="description"></textarea>
        </div>
        <div>
            <label>Poster Image</label>
            <input type="file" name="poster_path">
        </div>
        <div>
            <label>Sort Order</label>
            <input type="number" name="sort_order" value="0">
        </div>
        <div>
            <label>Status</label>
            <select name="status">
                <option value="draft">Draft</option>
                <option value="published">Published</option>
                <option value="archived">Archived</option>
            </select>
        </div>
        <div>
            <label>Published At</label>
            <input type="datetime-local" name="published_at">
        </div>
        <button type="submit">Create</button>
    </form>
    <a href="{{ route('creator.series.seasons.index', $series) }}">Back to Seasons</a>
</x-app-layout>
