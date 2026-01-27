<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BroadcastNotification extends Model
{
    protected $fillable = [
        'title',
        'message',
        'type',
        'target_role',
        'meta',
        'starts_at',
        'ends_at',
        'is_active'
    ];

    protected $casts = [
        'meta' => 'array',
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
        'is_active' => 'boolean',
    ];

    public function reads(): HasMany
    {
        return $this->hasMany(NotificationRead::class);
    }
}
