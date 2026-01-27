<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVideoView extends Model
{
    protected $fillable = [
        'user_id',
        'video_id',
        'watched_seconds',
        'ip_address',
        'user_agent',
    ];
}
