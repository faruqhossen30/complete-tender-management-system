<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('title',1000);
            $table->string('slug');
            $table->unsignedBigInteger('author_id');
            $table->longText('content');
            $table->string('address',1000)->nullable();
            $table->string('google_map',500)->nullable();
            $table->string('image');
            $table->string('video_link')->nullable();
            $table->unsignedBigInteger('location_id')->nullable();
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
        Schema::dropIfExists('places');
    }
}
