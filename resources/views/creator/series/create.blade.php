<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Create Series</h2>
    </x-slot>
    <form method="POST" action="{{ route('creator.series.store') }}">
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
</x-app-layout>
