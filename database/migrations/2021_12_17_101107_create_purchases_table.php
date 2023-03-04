<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->decimal('qty', 8,2);
            $table->decimal('rate', 4,2);
            $table->string('product', 15);
            $table->foreignId('pv_id')->constrained('pvs');
            $table->foreignId('stock_id')->constrained('stocks');
            $table->foreignId('closing_id')->constrained('closings');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
