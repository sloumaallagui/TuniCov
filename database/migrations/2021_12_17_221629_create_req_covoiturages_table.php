<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReqCovoituragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   Schema::create('req_covoiturages', function (Blueprint $table) {
        $table->id();
        $table->integer("qty");
        $table->string("place");
        $table->string("status");
        $table->timestamps();
        $table->unsignedBigInteger("cov_id")->nullable();
        $table->unsignedBigInteger("user_id")->nullable();
        $table->unique(["cov_id","user_id"],"unique");
        $table->foreign("cov_id")->references("id")->on("covoiturages") ->onDelete('cascade');
        $table->foreign("user_id")->references("id")->on("users") ->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
