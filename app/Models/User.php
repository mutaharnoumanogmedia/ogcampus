<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use HasRoles, HasApiTokens, HasFactory, Notifiable, Billable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected $appends = ["role"];


    public function videoProgress()
    {
        return $this->hasMany(UserVideoProgress::class);
    }

    public function savedVideos()
    {
        return $this->belongsToMany(Video::class, 'user_saved_videos');
    }

    public function hasActiveCreatorSubscription(): bool
    {
        return $this->subscribed('creator');
    }
    public function courseProgress()
    {
        return $this->hasMany(UserCourseProgress::class);
    }

    public function savedCourses()
    {
        return $this->belongsToMany(Course::class, 'user_saved_courses');
    }

    public function seriesRatings()
    {
        return $this->hasMany(SeriesRating::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function broadcastNotifications()
    {
        return $this->belongsToMany(BroadcastNotification::class, 'notification_reads', 'user_id', 'broadcast_notification_id')
            ->withPivot('read_at');
    }


    public function getRoleAttribute(): ?string
    {
        $roles = $this->getRoleNames();
        return $roles->isNotEmpty() ? $roles->last() : null;
    }


    public function episodes()
    {
        return $this->belongsToMany(Episode::class, 'user_episodes')
            ->using(\App\Models\UserEpisode::class)
            ->withPivot(['your', 'pivot', 'columns']) // replace with actual pivot columns
            ->withTimestamps();
    }


    public function creatorProfile()
    {
        return $this->hasOne(CreatorProfile::class);
    }

    public function createdSeries()
    {
        return $this->hasMany(Series::class, 'creator_id');
    }
}
