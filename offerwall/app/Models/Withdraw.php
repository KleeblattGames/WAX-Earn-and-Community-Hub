<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Withdraw extends Model
{
    use HasFactory;

    protected $fillable = [
        'wax_balance',
        'klee_balance',
        'approval_admin',
        'wax_amount',
        'user_id'
    ];
}
