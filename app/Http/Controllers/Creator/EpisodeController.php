<?php

namespace App\Http\Controllers\Creator;

use App\Http\Controllers\Controller;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Series;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function index(Series $series, Season $season)
    {
        $episodes = $season->episodes;
        return view('creator.episodes.index', compact('series', 'season', 'episodes'));
    }

    public function create(Series $series, Season $season)
    {
        return view('creator.episodes.create', compact('series', 'season'));
    }

    public function store(Request $request, Series $series, Season $season)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $season->episodes()->create($validated);
        return redirect()->route('creator.episodes.index', [$series, $season])->with('success', 'Episode created successfully.');
    }

    public function show(Series $series, Season $season, Episode $episode)
    {
        return view('creator.episodes.show', compact('series', 'season', 'episode'));
    }

    public function edit(Series $series, Season $season, Episode $episode)
    {
        return view('creator.episodes.edit', compact('series', 'season', 'episode'));
    }

    public function update(Request $request, Series $series, Season $season, Episode $episode)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $episode->update($validated);
        return redirect()->route('creator.episodes.index', [$series, $season])->with('success', 'Episode updated successfully.');
    }

    public function destroy(Series $series, Season $season, Episode $episode)
    {
        $episode->delete();
        return redirect()->route('creator.episodes.index', [$series, $season])->with('success', 'Episode deleted successfully.');
    }
}
