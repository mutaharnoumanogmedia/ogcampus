<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'season_id',
        'title',
        'slug',
        'description',
        'sort_order',
    ];

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class)->orderBy('sort_order');
    }
}


