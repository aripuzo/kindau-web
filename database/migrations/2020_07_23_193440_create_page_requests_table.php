<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_requests', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('subscriber_id');
            $table->foreign('subscriber_id')->references('id')->on('subscribers');
            $table->uuid('page_id');
            $table->foreign('page_id')->references('id')->on('pages');
            $table->string('service_code')->nillable();
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
        Schema::dropIfExists('page_requests');
    }
}
