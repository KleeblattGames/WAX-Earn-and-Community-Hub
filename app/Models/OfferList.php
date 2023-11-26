<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferList extends Model
{
    use HasFactory;

	   public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
