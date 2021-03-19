<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesCastMemersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies__cast_memers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_movie')->references('id')->on('movie');
            $table->bigInteger('id_cast_member')->references('id')->on('cast_members');
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
        Schema::dropIfExists('movies__cast_memers');
    }
}
