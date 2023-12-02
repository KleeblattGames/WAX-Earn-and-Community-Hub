<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'partner',
        'offer_name',
        'offer_id',
        'tx_id',
        'ip',
        'status',
        'multi_status',
        'payout',
        'currency_reward',
        'points',
        'wax_reward',
        'klee_reward',
        'reward_locked',
    ];
}
