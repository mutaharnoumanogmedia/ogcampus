<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        return view('user.browse');
    }

    public function show($id)
    {
        return view('user.session_detail', ['sessionId' => $id]);
    }
}
