<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function sessions()
    {
        return view('admin.sessions_list');
    }

    public function creators()
    {
        return view('admin.creators_list');
    }
}
