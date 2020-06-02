<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModelTagColumnToModelCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('model_cars', function (Blueprint $table) {
            $table->unsignedBigInteger('brand_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('model_cars', function (Blueprint $table) {
            $table->dropColumn('brand_id');
        });
    }
}
