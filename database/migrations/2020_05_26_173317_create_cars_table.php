<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('unique_sku');
            $table->string('name');
            $table->string('year');
            $table->text('short_description');
            $table->text('description');
            $table->integer('mileage');
            $table->integer('price');
            $table->integer('sale_type');
            $table->integer('photo_id');
            $table->integer('condition_id');
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
        Schema::dropIfExists('cars');
    }
}
