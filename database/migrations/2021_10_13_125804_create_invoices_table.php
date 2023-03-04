<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('inv_no', 20);
            $table->date('date');
            $table->string('duty_free_token');
            $table->string('inv_status',15);
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
        Schema::dropIfExists('invoices');
    }
}
