<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("trains", function (Blueprint $table) {
            $table->id();
            $table->foreignId("company_id");
            $table->foreignId("arrive_station_id");
            $table->foreignId("depart_station_id");
            $table->dateTime("arrive_time");
            $table->dateTime("depart_time");
            $table->string("train_code");
            $table->tinyInteger("coach_number");
            $table->string("state");
            $table->decimal("delay", 4, 0);
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
        Schema::dropIfExists("trains");
    }
}
