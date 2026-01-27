<?php

namespace App\Http\Controllers\Creator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function index()
    {
        // Show analytics dashboard
        return view('creator.analytics.index');
    }

    public function seasons()
    {
        // Show analytics for seasons
        return view('creator.analytics.seasons');
    }

    public function videos()
    {
        // Show analytics for videos
        return view('creator.analytics.videos');
    }

    public function reviews()
    {
        // Show analytics for reviews
        return view('creator.analytics.reviews');
    }

    public function watchTime()
    {
        // Show analytics for watch time
        return view('creator.analytics.watchtime');
    }
}
