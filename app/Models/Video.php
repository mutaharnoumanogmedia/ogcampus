<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'creator_id',
        'title',
        'slug',
        'description',
        'duration',
        'file_size',
        'storage_disk',
        'video_path',
        'thumbnail_path',
        'streaming_type',
        'has_hd',
        'has_full_hd',
        'has_4k',
        'is_free',
        'access_level',
        'status',
        'published_at',
    ];

    protected $casts = [
        'is_free' => 'boolean',
        'has_hd' => 'boolean',
        'has_full_hd' => 'boolean',
        'has_4k' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function progress()
    {
        return $this->hasMany(UserVideoProgress::class);
    }

    public function reactions()
    {
        return $this->hasMany(UserVideoReaction::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function episodeMedia()
    {
        return $this->hasMany(EpisodeMedia::class);
    }
}
