<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubscriptionPlan extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'slug',
        'stripe_price_id',
        'interval',
        'price',
        'type',
        'video_upload_limit',
        'can_stream_hd',
        'can_download',
        'is_active',
        'is_featured',
    ];

    public function isCreatorPlan(): bool
    {
        return $this->type === 'creator';
    }

    public function isViewerPlan(): bool
    {
        return $this->type === 'viewer';
    }
}
