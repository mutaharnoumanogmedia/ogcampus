<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Series;
use App\Models\User;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Show a list of all creators.
     */
    public function creators()
    {
        $creators = User::role('creator')->with("creator_profiles")->orderBy('name')->get();
        return view('website.creators', compact('creators'));
    }

    /**
     * Show details for a specific creator.
     */
    public function creatorDetail($id)
    {
        $creator = User::role('creator')->with("creator_profiles")->where('id', $id)->firstOrFail();
            $series = Series::where('creator_id', $creator->id)->get();
            return view('website.creator-detail', compact('creator', 'series', 'id'));
    }

    /**
     * Display the homepage
     */
    public function index()
    {
        $hotEpisodes = Episode::published()

            ->take(10)
            ->get()->sortByDesc('total_views');

        $exclusiveSeries = Series::published()
            ->where('is_exclusive', true)
            ->take(10)
            ->get();

        $featuredSeries = Series::published()
            ->with('genre', 'creator')
            ->where('is_featured', true)
            ->orderBy('sort_order', 'desc')
            ->take(4)
            ->get();
        $creators = User::role('creator')->inRandomOrder()->take(10)->get();
        return view('website.index', compact('hotEpisodes', 'exclusiveSeries', 'featuredSeries', 'creators'));
    }

    public function browse()
    {
        $series = Series::published()
            ->orderBy('title')
            ->get();
        return view('website.series', compact('series'));
    }



    public function browseGenres()
    {
        // Assuming you have a Genre model, otherwise return a placeholder.
        $genres = \App\Models\Genre::orderBy('name')->get();
        return view('website.browse_genres', compact('genres'));
    }

    /**
     * Show items in a specific genre.
     */
    public function browseGenre($slug)
    {
        $genre = \App\Models\Genre::where('slug', $slug)->firstOrFail();
        $series = Series::where('genre_id', $genre->id)
            ->where('status', 'published')
            ->orderBy('title')
            ->get();
        return view('website.browse_genre', compact('genre', 'series'));
    }

    /**
     * Show details for a specific series.
     */
    public function series($slug)
    {
        $series = Series::where('slug', $slug)
            ->where('status', 'published')
            ->with(['seasons.episodes', 'genre', 'creator'])
            ->firstOrFail();
        return view('website.series', compact('series'));
    }



    /**
     * Show a list of all seasons.
     */
    public function seasons()
    {
        $seasons = \App\Models\Season::with(['series'])
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->orderBy('season_number')
            ->get();
        return view('website.seasons', compact('seasons'));
    }

    /**
     * Show details for a specific season.
     */
    public function season($slug)
    {
        $season = \App\Models\Season::where('slug', $slug)
            ->where('status', 'published')
            ->whereNotNull('published_at')
            ->firstOrFail();

        return view('website.season', compact('season'));
    }

    /**
     * Show a list of all episodes.
     */
    public function episodes($season_slug)
    {
        $season = \App\Models\Season::where('slug', $season_slug)
            ->where('status', 'published')
            ->firstOrFail();
        $episodes = $season->episodes()->where('status', 'published')->get();

        return view('website.episodes', compact('episodes'));
    }

    /**
     * Show details for a specific episode.
     */
    public function episode($season_slug, $episode_slug)
    {
        $episode = Episode::where('slug', $episode_slug)
            ->whereHas('season', function ($query) use ($season_slug) {
                $query->where('slug', $season_slug);
            })
            ->where('status', 'published')
            ->with(['season.series', 'media'])
            ->firstOrFail();

        $otherEpisodes = Episode::whereHas('season', function ($query) use ($season_slug) {
            $query->where('slug', $season_slug);
        })
            ->where('status', 'published')
            ->where('id', '!=', $episode->id)
            ->with(['season.series'])
            ->get();

        return view('website.episode', compact('episode', 'otherEpisodes'));
    }

    /**
     * Show list of all categories for browsing.
     */
    public function browseCategories()
    {
        // Assuming you have a Category model.
        $categories = \App\Models\Category::orderBy('name')->get();
        return view('website.browse_categories', compact('categories'));
    }

    /**
     * Show items in a specific category.
     */
    public function browseCategory($slug)
    {
        // Assuming you have a Category and a Movie model (or similar).
        $category = \App\Models\Category::where('slug', $slug)->firstOrFail();
        $movies = $category->movies()->orderBy('title')->get();
        return view('website.browse_category', compact('category', 'movies'));
    }
}
