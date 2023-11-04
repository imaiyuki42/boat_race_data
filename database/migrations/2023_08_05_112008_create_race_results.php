<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaceResults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race_results', function (Blueprint $table) {
            $table->id('race_results_id');
            $table->string('race_name');
            $table->date('race_date');
            $table->integer('race_number');
            $table->integer('race_location_id');
            $table->integer('exacta_first');
            $table->integer('exacta_second');
            $table->integer('exacta_refund_price');
            $table->integer('exacta_rank');
            $table->integer('trifecta_first');
            $table->integer('trifecta_second');
            $table->integer('trifecta_third');
            $table->integer('trifecta_refund_price');
            $table->integer('trifecta_rank');
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
        Schema::dropIfExists('race_results');
    }
}
