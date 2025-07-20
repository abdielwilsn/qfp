<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    protected $fillable = [
        'user_id',
        'pair_base',
        'quote_currency',
        'type',
        'entry_price',
        'amount',
        'volume',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}