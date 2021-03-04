<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistComicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_comic', function (Blueprint $table) {
            $table->unsignedBigInteger('comic_id');
            $table->unsignedBigInteger('artist_id');

            $table->foreign('comic_id')->references('id')->on('comics')->onDelete('cascade');;
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artist_comic');
    }
}
