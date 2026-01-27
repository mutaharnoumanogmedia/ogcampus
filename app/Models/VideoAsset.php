<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoAsset extends Model
{
    use HasFactory;

    protected $fillable = [
        'video_session_id',
        'path',
        'quality',
    ];

    public function session()
    {
        return $this->belongsTo(VideoSession::class, 'video_session_id');
    }
}
