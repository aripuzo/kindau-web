<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuelAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuel_agents', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('pin');
            $table->string('location');
            $table->string('state');
            $table->string('lga');
            $table->string('area');
            $table->string('address');
            $table->string('attendant_name')->nullable();
            $table->string('attendant_phones')->nullable();
            $table->uuid('fuel_station_id');
            $table->foreign('fuel_station_id')->references('id')->on('fuel_stations');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fuel_agents');
    }
}
