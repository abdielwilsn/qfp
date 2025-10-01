<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyChangedAtColumnInBalanceLogsTable extends Migration
{
    public function up()
    {
        Schema::table('balance_logs', function (Blueprint $table) {
            $table->timestamp('changed_at')->change();
        });
    }

    public function down()
    {
        Schema::table('balance_logs', function (Blueprint $table) {
            $table->string('changed_at')->change();
        });
    }
}
