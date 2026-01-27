<?php

namespace App\Http\Controllers\Creator;

use App\Http\Controllers\Controller;
use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Series::all();
        return view('creator.series.index', compact('series'));
    }

    public function create()
    {
        return view('creator.series.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        Series::create($validated);
        return redirect()->route('creator.series.index')->with('success', 'Series created successfully.');
    }

    public function show(Series $series)
    {
        return view('creator.series.show', compact('series'));
    }

    public function edit(Series $series)
    {
        return view('creator.series.edit', compact('series'));
    }

    public function update(Request $request, Series $series)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $series->update($validated);
        return redirect()->route('creator.series.index')->with('success', 'Series updated successfully.');
    }

    public function destroy(Series $series)
    {
        $series->delete();
        return redirect()->route('creator.series.index')->with('success', 'Series deleted successfully.');
    }
}
