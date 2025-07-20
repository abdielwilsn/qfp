<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCoingeckoIdToTradingPairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trading_pairs', function (Blueprint $table) {
            $table->string('coingecko_id')->nullable()->after('quote_currency');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trading_pairs', function (Blueprint $table) {
            //
        });
    }
}
