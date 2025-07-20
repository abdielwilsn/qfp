<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradingPairsTable extends Migration
{
    public function up()
    {
        Schema::create('trading_pairs', function (Blueprint $table) {
            $table->id();
            $table->string('base_currency', 10); // e.g., BTC, ETH, SOL
            $table->string('quote_currency', 10)->default('USDT'); // e.g., USDT
            $table->boolean('is_active')->default(true); // Enable/disable pair
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trading_pairs');
    }
}