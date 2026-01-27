<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreatorProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'bio',
        'expertise',
        'website',
        'profile_image',
        'linkedin',
        'twitter',
        'is_active',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
