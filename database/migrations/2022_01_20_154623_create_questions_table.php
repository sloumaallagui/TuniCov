<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("content");

            $table->unsignedBigInteger("cov_id")->nullable();
            $table->unsignedBigInteger("user_id")->nullable();
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
        Schema::dropIfExists('questions');
    }
}
