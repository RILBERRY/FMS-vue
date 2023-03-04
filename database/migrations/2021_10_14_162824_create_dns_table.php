<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dns', function (Blueprint $table) {
            $table->id();
            $table->string('dn_no', 20);
            $table->date('date');
            $table->string('dn_status',15);
            $table->foreignId('customer_id')->constrained('customers');
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
        Schema::dropIfExists('dns');
    }
}
