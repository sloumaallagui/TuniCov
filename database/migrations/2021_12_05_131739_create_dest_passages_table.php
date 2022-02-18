<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestPassagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dest_passages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("cov_id");
            $table->unsignedBigInteger("place_id");

            $table->foreign('cov_id')->references('id')->on('covoiturages')

            ->onDelete('cascade');
            $table->foreign('place_id')->references('id')->on('places')

            ->onDelete('cascade');





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dest_passages');
    }
}
