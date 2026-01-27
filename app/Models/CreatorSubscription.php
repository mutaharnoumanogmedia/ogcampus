<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreatorSubscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'creator_id',
        'amount',
        'plan',
        'status',
        'transaction_id',
        'payment_date',
    ];
}
