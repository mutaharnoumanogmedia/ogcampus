<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeriesRating extends Model
{
    protected $fillable = [
        'user_id',
        'series_id',
        'rating',
        'review',
        'source',
        'ip_address',
        'user_agent',
    ];

    protected $casts = [
        'rating' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function series()
    {
        return $this->belongsTo(Series::class);
    }
}


