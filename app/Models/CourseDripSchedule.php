<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CourseDripSchedule extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'course_module_id',
        'course_id',
        'release_type',
        'days_after_enrollment',
        'release_at',
    ];
    public function courseModule()
    {
        return $this->belongsTo(CourseModule::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
