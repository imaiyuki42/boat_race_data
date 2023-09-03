<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExactaResults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exacta_results', function (Blueprint $table) {
            $table->id('exacta_results_id');
            $table->integer('exacta_first');
            $table->integer('exacta_second');
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
        Schema::dropIfExists('exacta_results');
    }
}
