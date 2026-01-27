<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'creator_id',
        'status',
        'scheduled_at',
    ];

    public function assets()
    {
        return $this->hasMany(VideoAsset::class);
    }
}
