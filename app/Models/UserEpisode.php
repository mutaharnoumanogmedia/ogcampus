<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserEpisode extends Pivot
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'episode_id',
        'watched_seconds',
        'progress_percent',
        'is_completed',
        'completed_at',
    ];

    
}
