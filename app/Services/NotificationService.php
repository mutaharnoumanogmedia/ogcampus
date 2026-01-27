<?php

namespace App\Services;


use App\Models\BroadcastNotification;
use Illuminate\Support\Carbon;

class NotificationService
{
    public function broadcast(
        string $title,
        string $message,
        ?string $role = null,
        array $meta = [],
        ?Carbon $startsAt = null,
        ?Carbon $endsAt = null
    ) {
        return BroadcastNotification::create([
            'title' => $title,
            'message' => $message,
            'target_role' => $role,
            'meta' => $meta,
            'starts_at' => $startsAt,
            'ends_at' => $endsAt,
        ]);
    }
}
