<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('car_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique;
            $table->timestamp('made_the_booking');
            $table->timestamp('booking_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_tests');
    }
}
