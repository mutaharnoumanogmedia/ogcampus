<?php

namespace App\Http\Controllers\Moderator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the moderator dashboard.
     */
    public function index()
    {
        return view('moderator.dashboard');
    }
}

