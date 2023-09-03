<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrifectaResults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trifecta_results', function (Blueprint $table) {
            $table->id('trifecta_results_id');
            $table->integer('trifecta_first');
            $table->integer('trifecta_second');
            $table->integer('trifecta_third');
            $table->integer('refund_price');
            $table->integer('rank');
            $table->date('race_date');
            $table->integer('race_location_id');
            $table->integer('race_number');
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
        Schema::dropIfExists('trifecta_results');
    }
}
