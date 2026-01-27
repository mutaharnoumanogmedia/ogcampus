<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Episode extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'season_id',
        'section_id',
        'episode_number',
        'title',
        'slug',
        'description',
        'thumbnail_path',
        'runtime',
        'sort_order',
        'status',
        'published_at',
        'is_free',
        'views',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    protected $appends = ['total_views'];

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function media()
    {
        return $this->hasMany(EpisodeMedia::class)->orderBy('sort_order');
    }


    public function users()
    {
        return $this->belongsToMany(User::class, 'user_episodes')
            ->using(\App\Models\UserEpisode::class)
            ->withPivot(['your', 'pivot', 'columns']) // replace with actual pivot columns
            ->withTimestamps();
    }

    public function userEpisodes()
    {
        return $this->hasMany(UserEpisode::class);
    }

    public function myEpisode($userId)
    {
        return $this->hasOne(UserEpisode::class)->where('user_id', $userId);
    }

    public function getTotalViewsAttribute()
    {
        return $this->hasMany(EpisodeView::class)->count();
    }


    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }
}
