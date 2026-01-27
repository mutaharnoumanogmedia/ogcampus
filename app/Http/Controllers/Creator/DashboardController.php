<?php

namespace App\Http\Controllers\Creator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the creator dashboard.
     */
    public function index()
    {
        return view('creator.dashboard');
    }
}

