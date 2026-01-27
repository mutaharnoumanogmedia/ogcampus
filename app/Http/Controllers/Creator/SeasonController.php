<?php

namespace App\Http\Controllers\Creator;

use App\Http\Controllers\Controller;
use App\Models\Season;
use App\Models\Series;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function index(Series $series)
    {
        $seasons = $series->seasons;
        return view('creator.seasons.index', compact('series', 'seasons'));
    }

    public function create(Series $series)
    {
        return view('creator.seasons.create', compact('series'));
    }

    public function store(Request $request, Series $series)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $series->seasons()->create($validated);
        return redirect()->route('creator.seasons.index', $series)->with('success', 'Season created successfully.');
    }

    public function show(Series $series, Season $season)
    {
        return view('creator.seasons.show', compact('series', 'season'));
    }

    public function edit(Series $series, Season $season)
    {
        return view('creator.seasons.edit', compact('series', 'season'));
    }

    public function update(Request $request, Series $series, Season $season)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $season->update($validated);
        return redirect()->route('creator.seasons.index', $series)->with('success', 'Season updated successfully.');
    }

    public function destroy(Series $series, Season $season)
    {
        $season->delete();
        return redirect()->route('creator.seasons.index', $series)->with('success', 'Season deleted successfully.');
    }
}
