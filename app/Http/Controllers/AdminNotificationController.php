<?php
namespace App\Http\Controllers;

use App\Models\BroadcastNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\NotificationService;

class AdminNotificationController extends Controller
{
    public function store(Request $request, NotificationService $service)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'message' => 'required|string',
            'target_role' => 'nullable|string',
            'meta' => 'nullable|array',
            'starts_at' => 'nullable|date',
            'ends_at' => 'nullable|date',
        ]);
        $notification = $service->broadcast(
            $data['title'],
            $data['message'],
            $data['target_role'] ?? null,
            $data['meta'] ?? [],
            $data['starts_at'] ?? null,
            $data['ends_at'] ?? null
        );
        return response()->json($notification, 201);
    }
}
