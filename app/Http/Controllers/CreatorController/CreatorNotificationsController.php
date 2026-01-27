<?php

namespace App\Http\Controllers\CreatorController;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\CreatorNotification;
use Illuminate\Http\Request;

class CreatorNotificationsController extends Controller
{
    public function index()
    {
        $creatorId = Auth::id();
        $notifications = CreatorNotification::where('creator_id', $creatorId)
            ->orderByDesc('created_at')
            ->get();
        return view('creator.notifications', compact('notifications'));
    }

    public function markAsRead($id)
    {
        $creatorId = Auth::id();
        $notification = CreatorNotification::where('id', $id)
            ->where('creator_id', $creatorId)
            ->firstOrFail();
        $notification->is_read = true;
        $notification->save();
        return redirect()->route('creator.notifications.index');
    }
}
