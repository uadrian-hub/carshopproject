<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_models', function (Blueprint $table) {
            $table->bigIncrements('id');

            
            $table->BigInteger('brand_id')->unsigned()->nullable();
            $table->foreign('brand_id')->references('id')
                  ->on('brands');

            $table->BigInteger('model_id')->unsigned()->nullable();
            $table->foreign('model_id')->references('id')
                  ->on('model_cars');

            
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
        Schema::dropIfExists('brand_models');
    }
}
