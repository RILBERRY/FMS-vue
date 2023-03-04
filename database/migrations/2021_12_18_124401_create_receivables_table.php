<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceivablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receivables', function (Blueprint $table) {
            $table->id();
            $table->string('method', 15);
            $table->date('paid_date');
            $table->string('curr_type', 10);
            $table->decimal('amount',12,2);
            $table->foreignId('fund')->constrained('funds'); //forgin key
            $table->foreignId('invoice_id')->constrained('invoices');//forgin key
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
        Schema::dropIfExists('receivables');
    }
}