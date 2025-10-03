<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChangedAtToBalanceLogs extends Migration
{
    public function up()
    {
        Schema::table('balance_logs', function (Blueprint $table) {
            if (!Schema::hasColumn('balance_logs', 'changed_at')) {
                $table->dateTime('changed_at')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('balance_logs', function (Blueprint $table) {
            $table->dropColumn('changed_at');
        });
    }
}
