<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Series</h2>
    </x-slot>
    <form method="POST" action="{{ route('creator.series.update', $series) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{ $series->title }}" required>
        </div>
        <div>
            <label>Description</label>
            <textarea name="description">{{ $series->description }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>
</x-app-layout>
