<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('logo');
            $table->integer('trade_licence_no');
            $table->integer('pin_no')->nullable();
            $table->integer('bin_no')->nullable();
            $table->integer('nid_no')->nullable();
            $table->string('trade_licence_img');
            $table->string('pin_img');
            $table->string('bin_img');
            $table->string('nid_img');
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
        Schema::dropIfExists('user_profiles');
    }
}
