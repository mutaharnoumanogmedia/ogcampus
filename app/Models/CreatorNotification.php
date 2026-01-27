<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreatorNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        'creator_id',
        'title',
        'message',
        'is_read',
    ];
}
