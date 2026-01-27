<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Series extends Model
{
    use SoftDeletes;

    protected $table = 'series';

    protected $fillable = [
        'creator_id',
        'genre_id',
        'title',
        'slug',
        'tagline',
        'description',
        'poster_path',
        'banner_path',
        'backdrop_path',
        'logo_path',
        'trailer_video_id',
        'release_year',
        'original_language',
        'country_code',
        'age_rating',
        'sort_order',
        'is_featured',
        'is_free',
        'access_level',
        'status',
        'approved_by',
        'approved_at',
        'rejection_reason',
        'published_at',
        'views',
        'series_total_duration',
        'tags'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_free' => 'boolean',
        'approved_at' => 'datetime',
        'published_at' => 'datetime',
        'series_total_duration' => 'integer',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function trailer()
    {
        return $this->belongsTo(Video::class, 'trailer_video_id');
    }

    

    public function seasons()
    {
        return $this->hasMany(Season::class)->orderBy('season_number');
    }

    public function ratings()
    {
        return $this->hasMany(SeriesRating::class);
    }

    public function scopePublished(){
        return $this->where('status','published');
    }

}


