<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferRequest extends Model
{
    use HasFactory;
    function client()
    {
        return $this->belongsTo(Client::class);
    }
    function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}
