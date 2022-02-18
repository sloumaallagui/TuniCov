<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReviewUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ReviewsUsers', function (Blueprint $table) {
            $table->id();
            $table->string("content");
            $table->float("nb_star");
            $table->unsignedBigInteger("reviewed_user_id")->nullable();
            $table->unsignedBigInteger("reviewer_user_id")->nullable();
            $table->foreign("reviewed_user_id")->references("id")->on("users");
            $table->foreign("reviewer_user_id")->references("id")->on("users");
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
        //
    }
}
