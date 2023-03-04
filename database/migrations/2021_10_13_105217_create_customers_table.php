<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('c_name',50);
            $table->string('c_name_dh',50);
            $table->integer('c_contact');
            $table->decimal('d_rate',4,2);
            $table->decimal('p_rate',4,2);
            $table->decimal('r_rate',4,2);
            $table->boolean('c_status');
            $table->foreignid('user_id')->nullable()->constraint('users');
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
        Schema::dropIfExists('customers');
    }
}
