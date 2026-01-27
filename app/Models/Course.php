<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'creator_id',
        'title',
        'slug',
        'description',
        'thumbnail_path',
        'is_free',
        'access_level',
        'status',
        'published_at',
    ];

    protected $casts = [
        'is_free' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function videos()
    {
        return $this->hasMany(Video::class)
            ->orderBy('lesson_order');
    }
    public function modules()
    {
        return $this->hasMany(CourseModule::class)
            ->orderBy('module_order');
    }
    public function prices()
    {
        return $this->hasMany(CoursePrice::class);
    }
    public function dripSchedules()
    {
        return $this->hasMany(CourseDripSchedule::class);
    }
    public function progress()
    {
        return $this->hasMany(UserCourseProgress::class);
    }
}
