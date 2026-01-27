<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatorController extends Controller
{
    public function dashboard()
    {
        return view('creator.dashboard');
    }

    public function createSession()
    {
        return view('creator.session_form');
    }

    public function upload()
    {
        return view('creator.upload_form');
    }
}
