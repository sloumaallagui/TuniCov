<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovoituragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covoiturages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id")->nullable();
            $table->unsignedBigInteger("dest_dep")->nullable();
            $table->unsignedBigInteger("dest_arrive")->nullable();
            $table->boolean("femme_uniq")->nullable();
            $table->text("description")->nullable();
            $table->boolean("non_fummeur")->nullable();
            $table->boolean("climatise")->nullable();
            $table->integer('nb_vue')->nullable();
            $table->dateTime("date")->nullable();
            $table->integer("nombre");
            $table->integer("prix")->nullable();
            $table->timestamps();
            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("dest_dep")->references("id")->on("places");
            $table->foreign("dest_arrive")->references("id")->on("places");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('couvoiturages');
    }
}
