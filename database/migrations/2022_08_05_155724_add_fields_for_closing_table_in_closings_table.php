<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsForClosingTableInClosingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('closings', function (Blueprint $table) {
            $table->decimal('sales',12,2);
            $table->decimal('purchases',12,2);
            $table->decimal('payments',12,2);
            $table->decimal('deposit',12,2);
            $table->decimal('withdwan',12,2);
            $table->decimal('a_balance',12,2);
            $table->decimal('balance',12,2);
            $table->boolean('is_confirm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('closings', function (Blueprint $table) {
            //
        });
    }
}
