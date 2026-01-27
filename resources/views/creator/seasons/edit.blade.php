<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Season for {{ $series->title }}</h2>
    </x-slot>
    <form method="POST" action="{{ route('creator.series.seasons.update', [$series, $season]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label>Season Number</label>
            <input type="number" name="season_number" min="1" value="{{ $season->season_number }}" required>
        </div>
        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{ $season->title }}">
        </div>
        <div>
            <label>Slug</label>
            <input type="text" name="slug" value="{{ $season->slug }}">
        </div>
        <div>
            <label>Description</label>
            <textarea name="description">{{ $season->description }}</textarea>
        </div>
        <div>
            <label>Current Poster</label>
            @if($season->poster_path)
                <img src="{{ asset($season->poster_path) }}" alt="Poster" style="max-width:100px;">
            @else
                <span>No poster uploaded.</span>
            @endif
        </div>
        <div>
            <label>Change Poster Image</label>
            <input type="file" name="poster_path">
        </div>
        <div>
            <label>Sort Order</label>
            <input type="number" name="sort_order" value="{{ $season->sort_order }}">
        </div>
        <div>
            <label>Status</label>
            <select name="status">
                <option value="draft" @if($season->status=='draft') selected @endif>Draft</option>
                <option value="published" @if($season->status=='published') selected @endif>Published</option>
                <option value="archived" @if($season->status=='archived') selected @endif>Archived</option>
            </select>
        </div>
        <div>
            <label>Published At</label>
            <input type="datetime-local" name="published_at" value="{{ $season->published_at ? $season->published_at->format('Y-m-d\TH:i') : '' }}">
        </div>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('creator.series.seasons.index', $series) }}">Back to Seasons</a>
</x-app-layout>
