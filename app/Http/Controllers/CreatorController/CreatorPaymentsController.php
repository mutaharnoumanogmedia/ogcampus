<?php

namespace App\Http\Controllers\CreatorController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CreatorSubscription;

class CreatorPaymentsController extends Controller
{
    public function index()
    {
        $creatorId = Auth::id();
        $payments = CreatorSubscription::where('creator_id', $creatorId)->orderByDesc('payment_date')->get();
        return view('creator.payments', compact('payments'));
    }
}
