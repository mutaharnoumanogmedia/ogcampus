<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EpisodeMedia extends Model
{
    use SoftDeletes;

    protected $table = 'episode_media';

    protected $fillable = [
        'episode_id',
        'video_id',
        'type',
        'title',
        'description',
        'storage_disk',
        'file_path',
        'file_size',
        'mime_type',
        'external_url',
        'embed_html',
        'duration',
        'sort_order',
        'is_downloadable',
    ];

    protected $casts = [
        'is_downloadable' => 'boolean',
    ];

    protected $appends = ['media_type'];

    public function episode()
    {
        return $this->belongsTo(Episode::class);
    }

    public function video()
    {
        return $this->belongsTo(Video::class);
    }

    public function getMediaTypeAttribute()
    {
        return "embed";
    }
}


