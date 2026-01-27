<?php
namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\BroadcastNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userNotifications = $user->notifications()->latest()->get();
        $broadcastNotifications = BroadcastNotification::where('is_active', true)
            ->where(function ($q) use ($user) {
                $q->whereNull('target_role')
                  ->orWhere('target_role', $user->role);
            })
            ->where(function ($q) {
                $q->whereNull('starts_at')
                  ->orWhere('starts_at', '<=', now());
            })
            ->where(function ($q) {
                $q->whereNull('ends_at')
                  ->orWhere('ends_at', '>=', now());
            })
            ->whereDoesntHave('reads', fn ($q) =>
                $q->where('user_id', $user->id)
            )
            ->get();
        return response()->json([
            'user_notifications' => $userNotifications,
            'broadcast_notifications' => $broadcastNotifications,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'message' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'from_user_id' => 'nullable|exists:users,id',
        ]);
        $notification = Notification::create($data);
        return response()->json($notification, 201);
    }
}
