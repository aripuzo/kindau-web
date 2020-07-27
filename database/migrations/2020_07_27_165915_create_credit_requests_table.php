<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_requests', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('subscriber_id');
            $table->foreign('subscriber_id')->references('id')->on('subscribers');
            $table->integer('amount');
            $table->string('token');
            $table->integer('status')->default(0);
            $table->boolean('sms_sent')->default(false);
            $table->uuid('telco_id')->nullable();
            $table->foreign('telco_id')->references('id')->on('telcos');
            $table->uuid('fuel_station_id')->nullable();
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
        Schema::dropIfExists('credit_requests');
    }
}
