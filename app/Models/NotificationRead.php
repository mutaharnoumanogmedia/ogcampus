<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotificationRead extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'broadcast_notification_id',
        'user_id',
        'read_at'
    ];
}
