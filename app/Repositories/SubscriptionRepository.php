<?php

namespace App\Repositories;

use App\Models\Subscription;

class SubscriptionRepository
{
    public function activeForUser(int $userId): ?Subscription
    {
        return Subscription::where('user_id', $userId)->where('active', true)->first();
    }
}
