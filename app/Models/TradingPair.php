<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TradingPair extends Model
{
    protected $fillable = [
        'base_currency',
        'quote_currency',
        'is_active',
        'coingecko_id'
    ];
}