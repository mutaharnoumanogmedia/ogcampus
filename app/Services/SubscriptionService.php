<?php

namespace App\Services;

use App\Models\User;

class SubscriptionService
{
    public function canUpload(User $user): bool
    {
        return $user->hasRole('creator')
            && $user->subscribed('creator');
    }

    
}
