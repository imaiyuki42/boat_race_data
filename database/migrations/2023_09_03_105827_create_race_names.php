<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaceNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('race_names', function (Blueprint $table) {
            $table->id('race_name_id');
            $table->string('race_name');
            $table->date('first_date');
            $table->date('second_date');
            $table->date('third_date');
            $table->date('fourth_date');
            $table->date('fifth_date');
            $table->date('sixth_date');
            $table->string('grade');
            $table->integer('race_location_id');
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
        Schema::dropIfExists('race_names');
    }
}
